<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('components.contact_us');
    }
    public function sendEmail(Request $request){
        $details = [
            'name' => $request -> name,
            'email' => $request -> email,
            'subject' => $request -> subject,
            'message' => $request -> message
        ];

        Mail::to('kimelim85@gmail.com')->send(new ContactMail($details));

        return back() -> with('message_sent', "We got your message,and we'll reply as soon as we can");
    }
}
