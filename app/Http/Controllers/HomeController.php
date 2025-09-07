<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;
use App\Models\Insta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome', 'home', 'about', 'services', 'repertoire']]);
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
        return view('pages_user.home')->with('banner', $banner)->with('insta', $insta);
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

}
