<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SupportRequestMail;
use App\Models\Document;
use App\Models\Tutorial;

class ClientController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        // Calculate hosting progress
        $hostingDaysLeft = 0;
        $hostingProgress = 0;

        if ($user->hosting_expires_at) {
            $expiryDate = \Carbon\Carbon::parse($user->hosting_expires_at);
            $now = now();

            if ($expiryDate->isFuture()) {
                $hostingDaysLeft = $now->diffInDays($expiryDate);
                // Assuming 1 year (365 days) hosting duration for progress bar
                $totalDuration = 365;
                $hostingProgress = max(0, min(100, ($hostingDaysLeft / $totalDuration) * 100));
            }
        }

        // Fetch Announcements (Excluding expired ones)
        $announcements = \App\Models\Announcement::where('is_published', true)
            ->where(function ($query) {
                $query->whereNull('expires_at')
                    ->orWhere('expires_at', '>', now());
            })
            ->latest()
            ->take(3)
            ->get();

        // Mark Announcement Notifications as read
        $user->unreadNotifications->where('type', 'App\Notifications\AnnouncementPublished')->markAsRead();

        // ===== SUMMARY STATS =====

        // My Business Section
        $businessClientsCount = \App\Models\BusinessClient::where('user_id', $user->id)->count();
        $lowStockCount = \App\Models\Product::where('user_id', $user->id)
            ->where('is_digital', false)
            ->whereColumn('quantity', '<=', 'min_stock')
            ->count();
        $pendingOrdersCount = \App\Models\Order::where('user_id', $user->id)
            ->where('status', 'pending')
            ->count();
        $publishedProductsCount = \App\Models\Product::where('user_id', $user->id)
            ->where('is_published', true)
            ->count();

        // My Website Section
        $subscribersCount = \App\Models\Subscriber::where('user_id', $user->id)->count();
        $blogPostsCount = \App\Models\Post::where('user_id', $user->id)->count();
        $unreadEmailsCount = \App\Models\InboxMessage::where('user_id', $user->id)
            ->where('is_read', false)
            ->count();

        // General Section
        $documentsCount = \App\Models\Document::where('user_id', $user->id)->count();
        $paymentsCount = $user->payments()->count();

        return view('client.dashboard', compact(
            'user',
            'hostingDaysLeft',
            'hostingProgress',
            'announcements',
            // My Business
            'businessClientsCount',
            'lowStockCount',
            'pendingOrdersCount',
            'publishedProductsCount',
            // My Website
            'subscribersCount',
            'blogPostsCount',
            'unreadEmailsCount',
            // General
            'documentsCount',
            'paymentsCount'
        ));
    }

    public function website()
    {
        $user = Auth::user();
        $activeSubscribersCount = \App\Models\Subscriber::where('user_id', $user->id)->count();
        $blogPostsCount = \App\Models\Post::where('user_id', $user->id)->count();
        $businessClientsCount = \App\Models\BusinessClient::where('user_id', $user->id)->count();
        return view('client.website', compact('user', 'activeSubscribersCount', 'blogPostsCount', 'businessClientsCount'));
    }

    public function editWebsite()
    {
        $user = Auth::user();
        return view('client.website.edit', compact('user'));
    }

    public function updateWebsite(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // Max 5MB
            'promotion_text' => 'nullable|string|max:500',
        ]);

        if ($request->hasFile('hero_image')) {
            // Delete old image if exists
            if ($user->hero_image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($user->hero_image);
            }

            $path = $request->file('hero_image')->store('client-content', 'public');
            $user->hero_image = $path;
        }

        $user->promotion_text = $request->input('promotion_text');
        $user->save();

        return redirect()->route('client.website')->with('success', 'Website content updated successfully.');
    }

    public function billing()
    {
        $user = Auth::user();
        $payments = $user->payments()->latest()->get();
        return view('client.billing', compact('user', 'payments'));
    }


    public function support()
    {
        return view('client.support');
    }

    public function sendSupportRequest(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'priority' => 'required|in:Low,Normal,High',
        ]);

        $data = [
            'user' => Auth::user(),
            'subject' => $request->subject,
            'message' => $request->message,
            'priority' => $request->priority,
        ];

        // Send email to admin (replace with actual admin email or use env)
        Mail::to('kevin@poutechnologies.com')->send(new SupportRequestMail($data));

        return back()->with('success', 'Your support request has been sent successfully. We will get back to you soon.');
    }

    public function profile()
    {
        return view('client.profile', [
            'user' => Auth::user(),
        ]);
    }

    public function documents()
    {
        $user = Auth::user();
        $documents = Document::where('user_id', $user->id)->latest()->get();
        return view('client.documents', compact('user', 'documents'));
    }

    public function tutorials()
    {
        $user = Auth::user();
        $tutorials = Tutorial::where('is_published', true)->orderBy('category')->latest()->get()->groupBy('category');
        return view('client.tutorials', compact('user', 'tutorials'));
    }

    public function analytics()
    {
        return view('client.analytics');
    }

    public function downloadDocument(Document $document)
    {
        // Authorization: User must own the document or be admin (though this route is for clients)
        if ($document->user_id !== Auth::id()) {
            abort(403);
        }

        if (!\Illuminate\Support\Facades\Storage::disk('public')->exists($document->file_path)) {
            return back()->with('error', 'File not found.');
        }

        return \Illuminate\Support\Facades\Storage::disk('public')->download($document->file_path, $document->title . '.' . pathinfo($document->file_path, PATHINFO_EXTENSION));
    }
}
