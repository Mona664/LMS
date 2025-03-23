<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //get index page
    public function index(){
        return view('index');
    }
    public function error(){
        return view('404');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function courses(){
        return view('courses');
    }
    public function team(){
        return view('team');
    }
    public function testimonial(){
        return view('testimonial');
    }
}
