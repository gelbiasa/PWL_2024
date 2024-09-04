<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() { 
        return 'Selamat Datang'; 
    } 
    public function greeting(){ 
        return view('blog.hello') 
            ->with('name','Gelby') 
            ->with('occupation','Astronaut'); 
    }
}
