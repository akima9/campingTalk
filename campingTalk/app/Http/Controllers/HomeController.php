<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function admin(){
        return view('admin');
    }

    public function qna(){
        return view('qna');
    }

    public function mypage(){
        return view('mypage');
    }

    public function notice(){
        return view('notice');
    }

    public function review_item(){
        return view('review_item');
    }

    public function review_site(){
        return view('review_site');
    }
}
