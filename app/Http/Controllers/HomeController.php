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
        $this->middleware('auth', ['except' => ['welcome', 'home']]);
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

}
