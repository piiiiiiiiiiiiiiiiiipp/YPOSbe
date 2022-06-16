<?php

namespace App\Http\Controllers;

use App\Mail\AppointMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('components.contact_us');
    }
    public function appoint(){
        return view('specialists');
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
    public function sendAppoint(Request $request){
        $details = [
            'email' => $request -> email,
            'date'=>$request->date,
            'time'=>$request->time,
            'description' => $request -> description
        ];

        Mail::to('kimelim85@gmail.com')->send(new AppointMail($details));

        return back() -> with('message_sent', "We got your message,and we'll reply as soon as we can");
    }
}
