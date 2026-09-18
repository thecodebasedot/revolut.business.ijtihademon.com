<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('pages.contact', [
            'title' => 'Contact',
            'description' => 'Questions about opening a Revolut Business account through this referral guide? Get in touch with Ijtihad Emon.',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        // Honeypot: real users never fill this hidden field.
        if ($request->filled('website')) {
            return redirect()->route('contact')->with('status', 'Thanks, your message has been received.');
        }

        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc', 'max:190'],
            'subject' => ['required', 'string', 'max:160'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ]);

        ContactMessage::create($data + [
            'ip_address' => $request->ip(),
            'user_agent' => (string) str($request->userAgent())->limit(250, ''),
        ]);

        return redirect()->route('contact')->with('status', 'Thanks, your message has been received. I usually reply within 1–2 business days.');
    }
}
