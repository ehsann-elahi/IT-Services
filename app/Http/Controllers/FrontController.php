<?php

namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.index');
    }
    
    public function aboutus()
    {
        return view('front.about');
    }

    public function services()
    {
        return view('front.service');
    }
    


}