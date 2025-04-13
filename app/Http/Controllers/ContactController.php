<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('Contact');
    }
    public function contactform(Request $request){
        $request->validate([
            'name'=>'required',
         'email'=>'required',
            'usermessage'=>'required',
           

        ]);
        Mail::to('mian11umar22@gmail.com')->send(new ContactNotification(
            $request->name,
            $request->email,
            $request->usermessage,
          
        ));
        return redirect()->route('/');

    }
}
