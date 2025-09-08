<?php

namespace  App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Support\Str;

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
    
    public function WebDevelopment()
    {
        return view('front.webDevelopment');
    }
    public function AppDevelopment()
    {
        return view('front.appDevelopment');
    }
    public function Digitalmarketing()
    {
        return view('front.digitalMarketing');
    }
    public function Seo()
    {
        return view('front.seo');
    }
    public function Graphicdesigning()
    {
        return view('front.graphicDesigning');
    }
    public function Socialmediamarketing()
    {
        return view('front.socialMedia');
    }
    public function OurTeam()
    {
        return view('front.ourTeam');
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('front.blog',compact('blogs'));
    }
    public function blogDetail()
    {
        $blogs = Blog::all();
        return view('front.blogDetail',compact('blogs'));
    }
    


}