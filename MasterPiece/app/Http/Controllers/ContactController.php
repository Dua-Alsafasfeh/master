<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request){

        $details = [
            'name'      => $request->name,
            'email'     => $request->email,
            'subject'   => $request->subject,
            'msg'       => $request->msg
        ];
        Mail::to('dua.ibrahim777@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','Thank you for contacting us, we will respond to you soon');
    }
}
