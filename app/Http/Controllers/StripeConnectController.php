<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Account;
use Stripe\AccountLink;
use Stripe\Checkout\Session;
use App\Models\BusinessClient;

class StripeConnectController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function onboard()
    {
        $user = Auth::user();

        if ($user->stripe_onboarding_completed) {
            return redirect()->route('client.business-clients.index')
                ->with('info', 'You have already connected your Stripe account.');
        }

        try {
            // Create a Standard or Express account for the user (Standard is often easier for platform liability)
            // Or retrieve existing if we had saved ID but not completed onboarding.
            // Simplified flow: Always create/retrieve account based on user state.

            if (!$user->stripe_account_id) {
                $account = Account::create([
                    'type' => 'standard',
                    'country' => 'US', // Defaulting to US, or handle dynamically
                    'email' => $user->email,
                ]);
                $user->stripe_account_id = $account->id;
                $user->save();
            }

            $accountLink = AccountLink::create([
                'account' => $user->stripe_account_id,
                'refresh_url' => route('client.stripe.onboard'),
                'return_url' => route('client.stripe.callback'),
                'type' => 'account_onboarding',
            ]);

            return redirect($accountLink->url);

        } catch (\Exception $e) {
            return back()->with('error', 'Unable to initiate Stripe onboarding: ' . $e->getMessage());
        }
    }

    public function callback()
    {
        $user = Auth::user();

        // Ideally we verify with Stripe if the account behaves as 'details_submitted'
        // For now, we assume success on return_url for this MVP step.

        try {
            $account = Account::retrieve($user->stripe_account_id);

            if ($account->details_submitted) {
                $user->stripe_onboarding_completed = true;
                $user->save();
                return redirect()->route('client.business-clients.index')
                    ->with('success', 'Stripe account connected successfully! You can now accept payments.');
            } else {
                return redirect()->route('client.business-clients.index')
                    ->with('warning', 'Stripe onboarding was not completed. Please try again.');
            }

        } catch (\Exception $e) {
            return redirect()->route('client.business-clients.index')
                ->with('error', 'Error verifying Stripe account status.');
        }
    }

    public function createPaymentLink(Request $request, BusinessClient $businessClient)
    {
        // ... (existing code omitted for brevity in prompt, but I will keep it in mind)
        if ($businessClient->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'amount' => 'required|numeric|min:1',
            'description' => 'required|string|max:255',
        ]);

        $user = Auth::user();

        if (!$user->stripe_onboarding_completed) {
            return back()->with('error', 'You must connect your Payment account first.');
        }

        try {
            // Amount in cents
            $amountCents = (int) ($request->amount * 100);

            // Calculate application fee (platform commission) based on user's rate
            $commissionRate = $user->stripe_commission_rate ?? 2.00;
            $applicationFee = (int) ($amountCents * ($commissionRate / 100));

            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => $request->description,
                            ],
                            'unit_amount' => $amountCents,
                        ],
                        'quantity' => 1,
                    ]
                ],
                'mode' => 'payment',
                'success_url' => route('client.business-clients.index') . '?payment_success=true',
                'cancel_url' => route('client.business-clients.index') . '?payment_cancel=true',
                'payment_intent_data' => [
                    'application_fee_amount' => $applicationFee,
                    'transfer_data' => [
                        'destination' => $user->stripe_account_id,
                    ],
                ],
            ]);

            return redirect($session->url);

        } catch (\Exception $e) {
            return back()->with('error', 'Error creating payment link: ' . $e->getMessage());
        }
    }

    public function resetOnboarding()
    {
        $user = Auth::user();
        $user->stripe_account_id = null;
        $user->stripe_onboarding_completed = false;
        $user->save();

        return redirect()->route('client.business-clients.index')
            ->with('success', 'Stripe connection reset. Please try connecting again.');
    }
}
