<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
    public function error(){
        return view('pages.error');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function blogdetails(){
        return view('pages.blog-details');
    }
}
