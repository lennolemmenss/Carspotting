<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;


class MailController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Mail::create($validatedData);

        // You can add a flash message or redirect the user to a thank you page
        return redirect()->route('contact')->with('success', 'Your message has been submitted!');
    }

    public function inbox() {
    $messages = Mail::latest()->get();
    return view('admin.inbox', ['messages' => $messages]);

    }

    public function delete(Request $request, $id)
    {
        $message = Mail::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.inbox')->with('success', 'Message deleted successfully!');
    }
}

