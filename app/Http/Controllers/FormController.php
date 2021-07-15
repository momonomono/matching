<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValiLoginRequest;
use App\Http\Requests\ValiSignupRequest;

class FormController extends Controller
{

    // ログイン画面
    public function login(){

        return view('login');
    }

    public function postLogin(ValiLoginRequest $request){

        return view();
    }


    // ユーザー登録画面
    public function signup(){
        
        return view('signup');
    }

    public function postSignup(ValiSignupRequest $requiest){

        

        return view();
    }
}
