<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
        $testimonials = Testimonial::get();
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

    //==================== ADMIN METHODS ===================================
    public function index()
    {
        return view('pages_admin.admin');
    }
    
    public function myAccount()
    {
        return view('pages_admin.account');
    }
    
    public function updateAccount(Request $request){
        
        //Validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'id' => 'required'
        ]);
        
        $nm = $request->input('name');
        $email = $request->input('email');
        $id = $request->input('id');
        $current_email = User::where('id', $id)->pluck('email');
        
        try {
        
            $user = User::find($id);
            $user->name = $nm;
            $user->email = $email;
            $user->save();

        } catch (QueryException $e) {
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return back()->with('warning', 'You cannot use that email address, as it has already been registered. Please try again!');
            }
        }
                
        return back()->with('success', 'Your Account Details have been Updated Successfully!');
    }

    public function changePassword(Request $request){
        
        //Validation
        $this->validate($request, [
            'password' => 'required',
            'confirm_password' => 'required',
            'id' => 'required'
        ]);
        
        $pw1 = $request->input('password');
        $pw2 = $request->input('confirm_password');
        $id = $request->input('id');
        
        if($pw1 === $pw2){
            $user = User::find($id);
            $user->password = bcrypt($pw1);
            $user->save();
            $mail = User::where('id', $id)->pluck('email');

        } else {
            return back()->with('error', 'Your Passwords didn\'t match! Please try again.');
        }
    }    

}
