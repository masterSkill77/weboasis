<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to('hello@weboasislabs.com')->send(new ContactMail($validated));

        return back()->with('success', 'Message envoyé ! On revient vers vous sous 48h.');
    }
}
