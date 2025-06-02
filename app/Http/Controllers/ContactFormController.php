<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        $ContactForms = Contact::latest()->get();
        return view('admin.ContactForm.index', compact('ContactForms'));
        // return view('admin.ContactForm.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'message' => 'required',
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'message' => $request->message,
        ]);
        return redirect()->route('contact')->with('success', 'Message sent!');
    }
}
