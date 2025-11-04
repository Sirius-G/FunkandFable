@extends('layouts.app')

@section('content')

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-5 py-4 my-4">
            <h1 class="inform_text pt-4 mt-4"><u>Contact us</u></h1>
            <p class="logo_sub_text">
                If you're interested in booking us for your event, please fill in the below form and we'll get back to you as soon as possible.
            </p>
            <div class="text-center">
                <img src="images/svg/divider.png" alt="Funk and Fable logo" width="100%">
            </div>
        </div>
        <div class="col-sm-12 col-md-7 text-center py-4 my-4">
            <img src="images/contact.jpeg" alt="Beth and Connor - Contact page banner" width="100%" class="about_banner_mob">
            <img src="images/contact.jpeg" alt="Beth and Connor - Contact page banner" width="100%" class="about_banner">
        </div>
      </div>
    </div>

    <div class="section_gap"></div>
    <section class="secondary-section wave-top"></section>

    <div class="bg_primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-4">
                    <h1 class="inform_text">Get in Touch</h1>
                    <hr>
                    <div class="row">
                        @include('inc.contactform')
                    </div>
                    <hr>
                </div>        
            </div>
        </div>
    </div>

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div> 


    </div>
      
    <script>showActive(6);</script>
@endsection
