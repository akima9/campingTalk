<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function store(Request $request){

        User::create([
            'user_id' => $request -> input('user_id'),
            'user_pw' => $request -> input('user_pw'),
            'user_level' => 'client', 
            'use_yn' => 'Y'
        ]);

        return redirect('login');
    }

    public function user_id_dupe_check(){
        return view('welcome');
    }
}
