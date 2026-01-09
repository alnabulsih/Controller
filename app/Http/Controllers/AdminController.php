<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function dashboard()
    {
        // Static data (because DB is not allowed)
        $title = "Admin Dashboard";
        $username = "Mohammad";
        $role = "Administrator";

        /**
         * 1️ Sending Data Using compact()
         */
        return view('admin.dashboard', compact('title', 'username', 'role'));


        /**
         * 2️ Sending Data Using with()
         */
        return view('admin.dashboard')
                ->with('title', $title)
                ->with('username', $username)
                ->with('role', $role);


        /**
         * 3️ Sending Data Using Array Syntax
         */
        return view('admin.dashboard', [
            'title' => $title,
            'username' => $username,
            'role' => $role
        ]);
    }
}
