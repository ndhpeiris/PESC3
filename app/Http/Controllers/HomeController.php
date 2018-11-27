<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Appoinment;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()->user_roll ==0){
            return view('landing');

        }else if(Auth::user()->user_roll ==1){
            $req = DB::select(DB::raw("select * from appoinments;"));
            
            return view('employee');

        }else{
            return view('landing');

        }
        
    }
}
