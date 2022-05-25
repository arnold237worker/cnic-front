<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        session(['page'=> 'home']);
        return view('home');
    }

    public function contact()
    { 
        session(['page'=> 'contact']);
        return view('contact');
    }

    public function about()
    {
        session(['page'=> 'about']);
        return view('about');
    }

    public function vendeur()
    {
        session(['page'=> 'vendeur']);
        return view('vendeur');
    }

    public function service()
    {
        session(['page'=> 'service']);
        return view('service');
    }
}
