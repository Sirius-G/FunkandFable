@extends('layouts.app')

@section('content')
    <div class="page_banner">
        @if(count($banner)>0)
        @foreach($banner as $b)
          <img src="images/{{$b->image_name}}" alt="{{$b->alt}}" class="headerimage">
          <div class="headerimagecover text-center">
            <img src="images/svg/F&FLogoLinear.svg" class="logolinear" alt="Funk and Fable logo">
            <img src="images/svg/F&FLogoStacked.svg" class="logostacked" alt="Funk and Fable logo">
            <p class="logo_sub_text_white sub_text">Professional Acoustic Band</p>
            <a href="/contact" title="Make a booking or enquiry" aria-label="Make a booking or enquiry" class="btn btn-primary btn-sm px-4 py-2 rounded-5 shadow-sm hover-button item overbanner">
              <strong>Book or Enquire Now</strong>
            </a>
          </div>
        @endforeach
        @endif
    </div>
    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="inform_text"><u>Home</u><br><br></h1>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
            <h2 class="inform_text">{!! $home->sections['section1'] ?? '' !!}</h2>
            <p class="logo_sub_text">{!! $home->sections['section2'] ?? '' !!}</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <p class="content_text">{!! $home->sections['section3'] ?? '' !!}</p>
          <div class="text-center">
            <a href="/about" title="Learn more about us" aria-label="Learn more about us" class="btn btn-primary btn-sm px-4 py-2 rounded-5 shadow-sm hover-button item">
              <strong>Learn more about us</strong>
            </a>
          </div>
        </div>  
      </div>
    </div>

    <div class="section_gap"></div>
    <section class="secondary-section wave-top"></section>
    <div class="bg_primary">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="inform_text mt-4">Frequently asked questions</h2>
          <p class="logo_sub_text_white">Get to know us even better....
            <a href="/faq" title="See more FAQ's" aria-label="See more FAQ's" class="btn btn-primary btn-sm px-4 py-2 rounded-5 shadow-sm hover-button item" style="font-family: tahoma, sans-serif;">
              <strong>See more FAQs</strong>
            </a>
          </p>
        </div>        
        @if(count($faq)>0)
        @foreach($faq as $f)
            <div class="col-sm-12 col-md-6 py-2 my-2">
                <!-- Questions from DB -->
                <hr><p class="fs-5">{{$f->question}}</p>
            </div>
            <div class="col-sm-12 col-md-6 py-2 my-2">
                <!-- Answers from DB -->
                <hr><p class="fs-5">{{$f->answer}}</p>
            </div>
        @endforeach
        @else 
            <div class="col-sm-12 text-center py-2 my-2">
                <p>Sorry, no frequently asked questions found.</p>
                <p>Click here to ask a new question</p>
            </div>
        @endif
      </div>
    </div>
  </div>
    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>   

    <div class="container">
      <div class="row">
        <h2 class="inform_text">Check out our Instagram</h2>
        <p class="logo_sub_text">Feedback, snaps and videos from recent gigs</p>
            @if(count($insta)>0)
            @foreach($insta as $i)
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center">  
              <blockquote class="instagram-media" data-instgrm-permalink="{{$i->url}}"></blockquote>
            </div>  
            @endforeach
            @endif
        <script async src="https://www.instagram.com/embed.js"></script>
      </div>
    </div>

    <div class="section_gap"></div>
    <section class="secondary-section wave-top"></section>
    <div class="bg_primary">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="inform_text">Testimonials</h2>
          <p class="logo_sub_text_white">What are people saying about us?</p>
        </div> 
        
        

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($testimonials as $testimonial)
                    <div class="raw-testimonial d-none">
                        <div class="card shadow-sm h-100 border-1">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <p class="card-text">"{{ $testimonial->testimonial }}"</p>
                                <small class="card-text mt-3 mb-0">— {{ $testimonial->added_by }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>



      </div>
    </div>
  </div>
    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div> 


    </div>
      
    <script>showActive(1);</script>
@endsection
