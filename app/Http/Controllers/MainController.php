<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function mypage(){

        return view('mypage');
    }

    public function logout(){
        
        Auth::logout();
        return redirect('/login');
    }
}
