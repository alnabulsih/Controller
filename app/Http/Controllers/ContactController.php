<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // 1️ Receive Form Data
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        // 2 Store Static Data
        $data = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];

        /**
         * 3️ Redirect To Result Page
         * We pass data using session flash ->with()
         */
        return redirect()->route('contact.result')->with('contactData', $data);
    }

    public function result()
    {
        // Receive flashed session data
        $contactData = session('contactData');

        return view('contact-result', compact('contactData'));
    }
}
