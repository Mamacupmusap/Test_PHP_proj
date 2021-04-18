<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function moviepage(){
        return view('pages/moviepage');
    }
    public function homepage(){
        return view('pages/homepage');
    }
    public function category(){
        return view('pages/category');
    }
    public function review(){
        return view('pages/review');
    }
    public function add_review(){
        return view('pages/add_review');
    }
}
