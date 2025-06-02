<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'required|string',
            'country' => 'required|string',
            'message' => 'required|string',
        ]);

        $contactData = [
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'country' => $request->country,
            'message' => $request->message,
        ];

        Mail::to('kktraderss09@gmail.com')->send(new ContactMail($contactData));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
