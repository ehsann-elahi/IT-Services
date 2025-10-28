<?php

namespace  App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Team;
use Rinvex\Country\CountryLoader;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Mail\NotificationMail;
use App\Models\Notification;

class FrontController extends Controller
{

    public function index()
    {
        $teams = Team::all();
        $blogs = Blog::latest()->take(3)->get();
        $countries = [
            ["name" => "United Arab Emirates", "code" => "+971"],
            ["name" => "Afghanistan", "code" => "+93"],
            ["name" => "Australia", "code" => "+61"],
            ["name" => "Canada", "code" => "+1"],
            ["name" => "China", "code" => "+86"],
            ["name" => "France", "code" => "+33"],
            ["name" => "Germany", "code" => "+49"],
            ["name" => "India", "code" => "+91"],
            ["name" => "Japan", "code" => "+81"],
            ["name" => "Pakistan", "code" => "+92"],
            ["name" => "Saudi Arabia", "code" => "+966"],
            ["name" => "United Kingdom", "code" => "+44"],
            ["name" => "United States", "code" => "+1"],
        ];
        return view('front.index', compact('countries', 'blogs', 'teams'));
    }

    public function aboutus()
    {
        $teams = Team::all();
        $countries = [
            ["name" => "United Arab Emirates", "code" => "+971"],
            ["name" => "Afghanistan", "code" => "+93"],
            ["name" => "Australia", "code" => "+61"],
            ["name" => "Canada", "code" => "+1"],
            ["name" => "China", "code" => "+86"],
            ["name" => "France", "code" => "+33"],
            ["name" => "Germany", "code" => "+49"],
            ["name" => "India", "code" => "+91"],
            ["name" => "Japan", "code" => "+81"],
            ["name" => "Pakistan", "code" => "+92"],
            ["name" => "Saudi Arabia", "code" => "+966"],
            ["name" => "United Kingdom", "code" => "+44"],
            ["name" => "United States", "code" => "+1"],
        ];
        return view('front.about', compact('countries', 'teams'));
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
        $teams = Team::all();
        return view('front.ourTeam', compact('teams'));
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('front.blog', compact('blogs'));
    }
    public function blogDetail($id)
    {

        $blog = Blog::findOrFail($id);

        return view('front.blogDetail', compact('blog'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($request->all());
        Notification::create([
            'message' => 'You have received a new message from ' . $contact->name .
                ' (Phone: ' . $contact->phone . ', Email: ' . $contact->email . ').'
        ]);

        $adminEmail = env('ADMIN_EMAIL');
        $recipientEmail = $contact->email;
        Mail::to($recipientEmail)->queue(new NotificationMail($contact));
        Mail::to($adminEmail)->queue(new NotificationMail($contact, true));

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function contact()
    {
        $countries = [
            ["name" => "United Arab Emirates", "code" => "+971"],
            ["name" => "Afghanistan", "code" => "+93"],
            ["name" => "Australia", "code" => "+61"],
            ["name" => "Canada", "code" => "+1"],
            ["name" => "China", "code" => "+86"],
            ["name" => "France", "code" => "+33"],
            ["name" => "Germany", "code" => "+49"],
            ["name" => "India", "code" => "+91"],
            ["name" => "Japan", "code" => "+81"],
            ["name" => "Pakistan", "code" => "+92"],
            ["name" => "Saudi Arabia", "code" => "+966"],
            ["name" => "United Kingdom", "code" => "+44"],
            ["name" => "United States", "code" => "+1"],
        ];
        return view('front.contact', compact('countries')); // yahan aapki contact.blade.php file hai
    }

    public function price()
    {
        return view('front.price');
    }
    public function missionvision()
    {
        return view('front.vision');
    }
    public function googleads()
    {
        return view('front.googleads');
    }
    public function ourwork()
    {
        return view('front.portfolio');
    }
    public function websolution()
    {
        return view('front.webSolution');
    }
    public function marketingSolution()
    {
        return view('front.marketingSolution');
    }
    public function appSolution()
    {
        return view('front.appSolution');
    }
    public function graphicSolution()
    {
        return view('front.graphicSolution');
    }
    public function seosolution()
    {
        return view('front.seosolution');
    }
    public function socialsolution()
    {
        return view('front.socialSolution');
    }
    public function googleadssolution()
    {
        return view('front.googleSolution');
    }
    public function flms()
    {
        return view('front.flms');
    }
    public function chatbot()
    {
        return view('front.chatbot');
    }
}
