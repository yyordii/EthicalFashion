<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs; // Add the missing import statement for the ContactUs class

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }
    public function send()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);
        Mail::to('svenschool8@gmail.com')->send(new ContactUs($data));

       // dd('Email was sent');
         return redirect()->back()->with('success', 'Thanks for your message.');
    }
}
