<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Review;
use App\User;
use DB;
use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
    

    public function landingPage(){
        //$user_roll = DB::select(DB::raw("select `user_roll` from users ;"));
       
            return view('landing');
        
    }

    public function reviewPage(){
        if(Auth::user()==null){
            return redirect('/');
        }
        
        return view('reviews');
    }

    public function commercialPage(){
        return view('commercial');
    }
    public function residentialPage(){
        return view('residential');
    }

    public function testPage(){
        return view('test');
    }

    public function userPage(){
        return view('user');
    }

    public function contactUsPage(){
        return view('contactUs');
    }

    public function submitreviewPage(Request $request){

        Review::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
            
            
          ]);
          $message = "Review create successfully, Thank you!";
      echo "<script type='text/javascript'>alert('$message');</script>";
        return view('landing');

     


    }
}
