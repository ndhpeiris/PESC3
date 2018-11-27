<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\sendMail;

class mailController extends Controller
{
    function index(){
        return view('mail');
    }
    function send(Request $request){
        $this->validate($request,[
            'amount' => 'required',
            'email' => 'required|email'
        ]);
        $data=array(
            'amount'=>$request->amount, 'email'=>$request->email
        );
        $email="chathurangi666@gmail.com";
        Mail::send('dynamic_email',$data, function($message) use($email){
            $message->to($email)->subject('Billing Invoice');
            $message->from('pamudikavindya4@gmail.com','Peiris Electrical Center');
        });
        
        
        
    }
}
