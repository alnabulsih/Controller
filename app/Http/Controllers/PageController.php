<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function home()
    {
        $title = "Home Page";
        $message = "Welcome to Laravel Controllers";

        return view('home', compact('title', 'message'));
    }

    public function about()
    {
        $title = "About Us";
        $message = "Learn more about our company";

        return view('about', compact('title', 'message'));
    }

     public function contact()
    {
        $title = "Contact Us";
        $message = "Get in touch with us";

        return view('contact', compact('title', 'message'));
    }

    public function user($name)
{
    return view('user', ['username' => $name]);
}


}
