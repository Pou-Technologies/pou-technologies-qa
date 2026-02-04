<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminDocumentController extends Controller
{
    public function index()
    {
        $documents = Document::with('user')->latest()->paginate(10);
        return view('admin.documents.index', compact('documents'));
    }

    public function create()
    {
        $clients = User::where('role', 'client')->get();
        return view('admin.documents.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf,doc,docx,zip|max:10240', // 10MB max
            'type' => 'required|string|in:contract,report,manual,other',
        ]);

        $path = $request->file('document')->store('documents', 'public');

        $document = Document::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'file_path' => $path,
            'type' => $request->type,
        ]);

        $user = User::find($request->user_id);
        $user->notify(new \App\Notifications\DocumentUploaded($document));

        return redirect()->route('admin.documents.index')->with('success', 'Document uploaded successfully.');
    }

    public function destroy(Document $document)
    {
        if (Storage::disk('public')->exists($document->file_path)) {
            Storage::disk('public')->delete($document->file_path);
        }

        $document->delete();

        return redirect()->route('admin.documents.index')->with('success', 'Document deleted successfully.');
    }
}
