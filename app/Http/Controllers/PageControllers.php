<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    public function home(){
        return view('index', ['nama' => 'Andri']);
    }
    public function about(){
        return view('about');
    }
}
