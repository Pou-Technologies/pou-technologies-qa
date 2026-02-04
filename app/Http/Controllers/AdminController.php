<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Payment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClientWelcomeMail;
use App\Mail\CustomClientMail;
use App\Models\Post;
use App\Models\Subscriber;
use Illuminate\Support\Str;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'clients' => User::where('role', 'client')->count(),
            'posts' => Post::count(),
            'subscribers' => Subscriber::count(),
        ];

        $recentClients = User::where('role', 'client')->latest()->take(5)->get();

        try {
            $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
            $analytics = [
                'visitors' => $analyticsData->sum('activeUsers'),
                'pageViews' => $analyticsData->sum('screenPageViews'),
                'period' => 'Last 7 Days'
            ];
        } catch (\Throwable $e) {
            if (str_contains($e->getMessage(), 'SSL certificate')) {
                $analytics = ['error' => 'Local SSL Certificate Issue (WAMP Config)'];
            } else {
                $analytics = null;
            }
        }

        return view('admin.dashboard', compact('stats', 'recentClients', 'analytics'));
    }

    public function index()
    {
        $clients = User::where('role', 'client')->latest()->paginate(10);
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.create-client');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:20',
            'domain' => 'nullable|string|max:255',
            'hosting_expires_at' => 'nullable|date',
        ]);

        $password = Str::random(10);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password),
            'role' => 'client',
            'phone' => $request->phone,
            'domain' => $request->domain,
            'hosting_expires_at' => $request->hosting_expires_at,
        ]);

        Mail::to($user->email)->send(new ClientWelcomeMail($user, $password));

        return redirect()->route('admin.dashboard')->with('success', "Client created successfully. Invitation email sent.");
    }

    public function show(User $client)
    {
        $client->load('payments');
        return view('admin.clients.show', compact('client'));
    }

    public function edit(User $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, User $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $client->id,
            'phone' => 'nullable|string|max:20',
            'domain' => 'nullable|string|max:255',
            'hosting_expires_at' => 'nullable|date',
            'notes' => 'nullable|string',
        ]);

        $client->update($request->only(['name', 'email', 'phone', 'domain', 'hosting_expires_at', 'notes']));

        // Process special features
        $featuresList = ['streaming_service', 'advanced_analytics', 'custom_domain'];
        $features = [];
        $submittedFeatures = $request->input('features', []);

        foreach ($featuresList as $feature) {
            $features[$feature] = isset($submittedFeatures[$feature]);
        }

        $client->special_features = $features;
        $client->save();

        return redirect()->route('admin.clients.show', $client)->with('success', 'Client updated successfully.');
    }

    public function destroy(User $client)
    {
        $client->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Client deleted successfully.');
    }

    public function addPayment(Request $request, User $client)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
            'payment_date' => 'required|date',
        ]);

        $client->payments()->create($request->all());

        return back()->with('success', 'Payment recorded successfully.');
    }

    public function sendEmail(Request $request, User $client)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to($client->email)->send(new CustomClientMail($client, $request->subject, $request->message));

        return back()->with('success', 'Email sent successfully.');
    }

    public function toggleFeature(User $client, string $feature)
    {
        $allowedFeatures = ['streaming_service', 'advanced_analytics', 'custom_domain'];

        if (!in_array($feature, $allowedFeatures)) {
            return back()->with('error', 'Invalid feature.');
        }

        $client->toggleFeature($feature);

        $status = $client->hasFeature($feature) ? 'enabled' : 'disabled';

        return back()->with('success', ucwords(str_replace('_', ' ', $feature)) . ' ' . $status . '.');
    }

    public function updateCommission(Request $request, User $client)
    {
        $request->validate([
            'commission_rate' => 'required|numeric|min:0|max:100',
        ]);

        $client->update([
            'stripe_commission_rate' => $request->commission_rate,
        ]);

        return back()->with('success', 'Commission rate updated to ' . $request->commission_rate . '%.');
    }

    public function toggleApi(User $client)
    {
        $client->update(['api_enabled' => !$client->api_enabled]);

        if ($client->api_enabled && !$client->api_key) {
            $client->update([
                'api_key' => 'pt_' . bin2hex(random_bytes(32)),
                'api_key_generated_at' => now(),
            ]);
        }

        $status = $client->api_enabled ? 'enabled' : 'disabled';
        return back()->with('success', 'API access ' . $status . '.');
    }

    public function generateApiKey(User $client)
    {
        $client->update([
            'api_key' => 'pt_' . bin2hex(random_bytes(32)),
            'api_key_generated_at' => now(),
        ]);

        return back()->with('success', 'New API key generated.');
    }

    public function updateRateLimit(Request $request, User $client)
    {
        $request->validate([
            'rate_limit' => 'required|integer|min:10|max:300',
        ]);

        $client->update(['api_rate_limit' => $request->rate_limit]);

        return back()->with('success', 'Rate limit updated to ' . $request->rate_limit . ' requests per minute.');
    }
}
