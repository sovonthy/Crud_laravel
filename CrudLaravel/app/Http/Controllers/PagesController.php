<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function action(){
        return view('pages.action');
    }
    public function about(){
        return view('pages.about');
    }
    public function join(){
        return view('pages.join');
    }
    public function news(){
        return view('pages.news');
    }
    public function contact(){
        return view('pages.contact');
    }
}
