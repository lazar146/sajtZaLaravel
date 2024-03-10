<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact');
    }

    public function sendEmail(Request $request)
    {



        $email = $request->email;
        $message = $request->message;

        Mail::to('lazar.milosevic.139.21@ict.edu.rs')->send(new ContactMail($email, $message));

        return redirect('/contact')->with('success', 'Poruka je uspešno poslata!');
    }
}
