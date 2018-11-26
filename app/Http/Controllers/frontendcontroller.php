<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
    

    public function landingPage(){
        return view('landing');
    }

    public function reviewPage(){
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
}
