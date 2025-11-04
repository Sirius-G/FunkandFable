<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;
use App\Models\Insta;
use App\Models\Faq;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome', 'home', 'faq', 'about', 'services', 'repertoire', 'media', 'contact']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages_admin.admin');
    }


    //User Pages
    public function welcome()
    {
        return view('pages_user.welcome');
    }

    public function home()
    {
        $banner = Banners::where('id', 1)->get();
        $insta = Insta::get();
        $faq = Faq::orderby('id', 'ASC')->get()->take(3);
        $testimonials = Testimonial::latest()->get();
        return view('pages_user.home')
                    ->with('banner', $banner)
                    ->with('insta', $insta)
                    ->with('faq', $faq)
                    ->with('testimonials', $testimonials);
    }       

    public function faq()
    {
        $faq = Faq::where('answer', '<>', '')->get();
        return view('pages_user.faq')->with('faq', $faq);
    }

    public function about()
    {
        return view('pages_user.about');
    }

    public function services()
    {
        return view('pages_user.services');
    }

    public function repertoire()
    {
        return view('pages_user.repertoire');
    }

    public function media()
    {
        return view('pages_user.media');
    }

    public function contact()
    {
        return view('pages_user.contact');
    }

}
