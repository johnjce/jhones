<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request){
         $request->validate([
            'name' => 'required|min:3',
            'subject_mail' => 'required|min:4',
            'email' => 'required|email',
            'content' => 'required|min:4',
        ]);
        $contact_email = Setting::select('contact_mail')->where('id',1)->first();
        Mail::to($contact_email->contact_mail)->send(new ContactMail($request->name, $request->email, $request->subject_mail, $request->content));
        return to_route('home')->with('message','Hemos enviado tu mensaje, te contactaremos lo antes posible!');
    }
}
