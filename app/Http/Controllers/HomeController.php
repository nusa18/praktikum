<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        return view("home0259");
    }
    public function artikel(){
        return view("artikel0259");
    }
    public function contact(){
        return view("contact0259");
    }
}