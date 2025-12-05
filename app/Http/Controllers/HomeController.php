<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Banners;
use App\Models\Insta;
use App\Models\Faq;
use App\Models\Video;
use App\Models\Testimonial;
use App\Models\PageContents;
use App\Models\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome', 'home', 'faq', 'faq_create', 'testimonial_create', 'about', 'services', 'repertoire', 'media', 'contact']]);
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
        $testimonials = Testimonial::where('confirmation', 'Yes')->get();
        //$data = PageContents::where('id', 1)->get();
        $home = Page::where('slug', 'home')->firstOrFail();
        
        return view('pages_user.home')
                    ->with('banner', $banner)
                    ->with('insta', $insta)
                    ->with('faq', $faq)
                    ->with('testimonials', $testimonials)
                    ->with('home', $home);
    }       

    public function faq()
    {
        $faq = Faq::where('answer', '<>', '')->get();
        return view('pages_user.faq')->with('faq', $faq);
    }

    public function faq_create(Request $request)
    {
        // Honeypot: if filled, it's a bot
        if ($request->filled('website')) {
            return back()->withErrors(['error' => 'Invalid submission detected.']);
        }

        // Validate form fields
        $validated = $request->validate([
            'question' => 'required|string|max:2000',
            'email' => 'nullable|email|max:255',
            'name' => 'nullable|max:255',
            'human_check' => 'required|in:7',
        ], [
            'human_check.in' => 'Please answer the human verification question correctly.',
        ]);

        if ((int) $request->human_check !== 7) {
            return back()
                ->withErrors(['error' => 'Invalid submission detected.'])
                ->withInput();
        }


        // Store new question in database
        FAQ::create([
            'question' => $validated['question'],
            'email_address' => $validated['email'] ?? null,
            'submitted_by' => $validated['name'] ?? null,
        ]);

        return back()->with('success', 'Your question has been submitted!');
    }
    public function testimonial_create(Request $request)
    {
        // Honeypot: if filled, it's a bot
        if ($request->filled('website')) {
            return back()->withErrors(['error' => 'Invalid submission detected.']);
        }

        // Validate form fields
        $validated = $request->validate([
            'testimonial' => 'required|string|max:2000',
            'name' => 'nullable|max:255',
            'human_check' => 'required|in:7',
        ], [
            'human_check.in' => 'Please answer the human verification question correctly.',
        ]);

        if ((int) $request->human_check !== 7) {
            return back()
                ->withErrors(['error' => 'Invalid submission detected.'])
                ->withInput();
        }


        // Store new question in database
        Testimonial::create([
            'testimonial' => $validated['testimonial'],
            'added_by' => $validated['name'] ?? null,
            'confirmation' => 'No'
        ]);

        return back()->with('success', 'Your testimonial has been submitted!');
    }

    public function about()
    {
        $about = Page::where('slug', 'about')->firstOrFail();
        $expertise = Page::where('slug', 'expertise')->firstOrFail();
        $banner = Banners::where('id', 2)->get();
        return view('pages_user.about')
                    ->with('banner', $banner)
                    ->with('about', $about)
                    ->with('expertise', $expertise);
    }

    public function edit(Page $page)
    {
        // Ensure sections is an array
        $sections = is_array($page->sections) ? $page->sections : json_decode($page->sections, true);

        // Extract keys from sections JSON
        $sectionKeys = array_keys($sections ?? []);

        return view('pages_admin.edit', [
            'page' => $page,
            'sectionKeys' => $sectionKeys,
        ]);
    }


    public function update(Request $request, Page $page)
    {
        $validated = $request->validate([
            'sections' => 'required|string', // EditorJS sends JSON string
        ]);

        // Decode EditorJS output
        $editorOutput = json_decode($validated['sections'], true);

        $sectionsArray = [];
        if (!empty($editorOutput['blocks'])) {
            foreach ($editorOutput['blocks'] as $index => $block) {
                $key = "section" . ($index + 1);
                $text = $block['data']['text'] ?? '';

                // Remove any "sectionX: " prefix from the text
                $text = preg_replace('/^section\d+:\s*/i', '', $text);

                $sectionsArray[$key] = $text;
            }
        }

        // Overwrite sections completely
        $page->update([
            'sections' => $sectionsArray
        ]);

        return redirect()->back()->with('success', 'Page content updated.');
    }





    public function services()
    {
        $banner = Banners::where('id', 3)->get();
        $offer = Page::where('slug', 'offer')->firstOrFail();
        $details = Page::where('slug', 'details')->firstOrFail();
        $details2 = Page::where('slug', 'details2')->firstOrFail();
        return view('pages_user.services')
                    ->with('banner', $banner)
                    ->with('offer', $offer)
                    ->with('details', $details)
                    ->with('details2', $details2);
    }

    public function repertoire()
    {
        $banner = Banners::where('id', 4)->get();
        $repertoire = Page::where('slug', 'repertoire')->firstOrFail();
        $list = Page::where('slug', 'list')->firstOrFail();
        $list1 = Page::where('slug', 'list1')->firstOrFail();
        $list2 = Page::where('slug', 'list2')->firstOrFail();
        $list3 = Page::where('slug', 'list3')->firstOrFail();
        $list4 = Page::where('slug', 'list4')->firstOrFail();
        $list5 = Page::where('slug', 'list5')->firstOrFail();
        return view('pages_user.repertoire')
                    ->with('banner', $banner)
                    ->with('repertoire', $repertoire)
                    ->with('list', $list)
                    ->with('list1', $list1)
                    ->with('list2', $list2)
                    ->with('list3', $list3)
                    ->with('list4', $list4)
                    ->with('list5', $list5);
    }

    public function media()
    {
        $banner = Banners::where('id', 5)->get();
        $media = Page::where('slug', 'media')->firstOrFail();
        $videos = Video::get();
        return view('pages_user.media')
                    ->with('banner', $banner)
                    ->with('media', $media)
                    ->with('videos', $videos);
    }

    public function contact()
    {
        $banner = Banners::where('id', 6)->get();
        $contact = Page::where('slug', 'contact')->firstOrFail();
        return view('pages_user.contact')->with('banner', $banner)->with('contact', $contact);
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

    public function admin_faq(){
        $faqs = Faq::get();
        
        return view('pages_admin.edit_faq')->with('faqs', $faqs);
    }

    public function faq_edit($id)
    {
        // Include soft-deleted FAQs in case we want to edit them
        $faq = Faq::withTrashed()->findOrFail($id);

        return view('pages_admin.faqs_edit', compact('faq'));
    }

    public function faq_update(Request $request, $id)
    {
        // Include soft-deleted FAQs
        $faq = Faq::withTrashed()->findOrFail($id);

        // Validate incoming request
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        // Update the FAQ
        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('admin.faq', $faq->id)
                         ->with('success', 'FAQ updated successfully.');
    }

    public function admin_insta(){
        $insta = Insta::get();
        
        return view('pages_admin.edit_insta')->with('insta', $insta);
    }

    public function insta_edit($id)
    {
        // Include soft-deleted Instagram posts in case we want to edit them
        $insta = Insta::withTrashed()->findOrFail($id);

        return view('pages_admin.insta_edit', compact('insta'));
    }

    public function insta_update(Request $request, $id)
    {
        // Include soft-deleted Instagram Posts
        $insta = Insta::withTrashed()->findOrFail($id);

        // Validate incoming request
        $request->validate([
            'url' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $url = str_replace('/funkandfable/', '/', $request->url);
        
        // Update the Instagram Posts
        $insta->update([
            'url' => $url,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.insta', $insta->id)
                         ->with('success', 'Instagram posts updated successfully.');
    }


    public function admin_testimonials(){
        $testimonials = Testimonial::get();
        
        return view('pages_admin.edit_testimonials')->with('testimonials', $testimonials);
    }

    public function testimonial_edit($id)
    {
        // Include soft-deleted testimonials in case we want to edit them
        $testimonial = Testimonial::withTrashed()->findOrFail($id);

        return view('pages_admin.testimonial_edit', compact('testimonial'));
    }

    public function testimonial_update(Request $request, $id)
    {
        // Include soft-deleted testimonials
        $testimonial = Testimonial::withTrashed()->findOrFail($id);

        // Validate incoming request
        $request->validate([
            'testimonial' => 'required|string|max:255',
            'added_by' => 'required|string',
            'confirmation' => 'required',
        ]);
        
        // Update the testimonial
        $testimonial->update([
            'testimonial' => $request->testimonial,
            'added_by' => $request->added_by,
            'confirmation' => $request->confirmation,
        ]);

        return redirect()->route('admin.testimonials')
                         ->with('success', 'Testimonial updated successfully.');
    }

    public function admin_videos(){
        $videos =  Video::withTrashed()->get();
        
        return view('pages_admin.edit_videos')->with('videos', $videos);
    }

    public function video_edit($id)
    {
        // Include soft-deleted video in case we want to edit them
        $video = Video::withTrashed()->findOrFail($id);

        return view('pages_admin.video_edit', compact('video'));
    }

    public function video_update(Request $request, $id)
    {
        // Include soft-deleted videos
        $video = Video::withTrashed()->findOrFail($id);

        // Validate incoming request
        $request->validate([
            'youtube_id' => 'required|string|max:255',
            'title' => 'required|string',
        ]);
        
        // Update the testimonial
        $testimonial->update([
            'youtube_id' => $request->youtube_id,
            'title' => $request->title,
        ]);

        return redirect()->route('admin.videos')
                         ->with('success', 'Video updated successfully.');
    }

    public function video_delete($id)
    {
        $video = Video::withTrashed()->findOrFail($id);

        // Soft delete
        $video->delete();

        return redirect()->back()->with('success', 'Video deleted successfully!');
    }

    public function video_restore($id)
    {
        // Include trashed items
        $video = Video::withTrashed()->findOrFail($id);

        // Restore the item
        $video->restore();

        return redirect()->back()->with('success', 'Video restored successfully!');
    }

    public function banner_edit($id){
        $banner_image = Banners::where('id', $id)->get();

        return view('pages_admin.edit_banner')->with('banner_image', $banner_image);
    }

    public function update_banner(Request $request){
                
        $this->validate($request, [
            'image_name' => 'image',
            'alt' => 'required',
            'id' => 'required'
        ]);

        $id = $request->input('id');

        //return $id;
		  		  
        //Handle File Upload
        if($request->hasFile('image_name')){

            //Get original filename
            $filenameWithExt = $request->file('image_name')->getClientOriginalName();
            //Get just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Just filename extension
            $extension = $request->file('image_name')->getClientOriginalExtension();
            //Concatenate filename with date / time to make it unique
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
			$img = $request->file('image_name');
            $img->move('images', $fileNameToStore);	
		} 	  
		  
            //Create new entry into Messages get_html_translation_table
            try{
                
                $app = Banners::find($id);

                // Update image if provided
                if ($request->hasFile('image_name')) {
                    $app->image_name = $fileNameToStore;
                }

                // Update alt text if provided
                if ($request->filled('alt')) {
                    $app->alt = $request->input('alt');
                }

                $app->update();

			
            } catch (\Illuminate\Database\QueryException $e) {
                $errorCode = $e->errorInfo[1];
                return back()->with('error', 'Something went wrong!'.$errorCode);
            }
              	
                return redirect()->back()->with('success', 'Your record has been successfully updated.');
    }




}
