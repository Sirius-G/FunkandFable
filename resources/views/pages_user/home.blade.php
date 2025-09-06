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
        <div class="col-sm-12 col-md-6">
          <h2 class="inform_text">Who are we?</h2>
          <p class="logo_sub_text">A little about us</p>
        </div>
        <div class="col-sm-12 col-md-6">
          <p class="content_text">
            We are Beth and Connor, an acoustic duo based out of South Wales with a decade of experience performing together. We currently perform regularly in various locations of The Botanist including Cardiff, Bath, and Cheltenham, and The Clubhouse in Cardiff Bay, alongside playing weddings and other private events. We both gained our degrees in Contemporary Music Performance from USW and love performing together! 
          </p>
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
          <h2 class="inform_text">Frequently asked questions</h2>
          <p class="logo_sub_text_white">Get to know us even better....</p>
        </div>        
        <div class="col-sm-12 col-md-6">
          <hr>
          <p class="logo_sub_text_white">How can I book Funk & Fable?</p>
        </div>
        <div class="col-sm-12 col-md-6">
          <hr>
          <p class="content_text">
            You can book us by visiting our Contant Us page and submitting an enquiry. We'll get back to you with our availablility and a quote for your requested service!
          </p>
        </div>  
        <div class="col-sm-12 col-md-6">
          <hr>
          <p class="logo_sub_text_white">What services do you offer?</p>
        </div>
        <div class="col-sm-12 col-md-6">
          <hr>
          <p class="content_text">
            We provide live acoustic music for weddings, private and corporate events across the UK. Our standard line-up consists of acoustic guitar and vocals but we also offer extended line-ups that can include percussion, bass and saxophone. We provide all necessary equipment including PA and lighting. Head to our Services page for detailed information on what we offer.
          </p>
        </div>  
        <div class="col-sm-12 col-md-6">
          <hr>
          <p class="logo_sub_text_white">Can you learn song requests?</p>
        </div>
        <div class="col-sm-12 col-md-6">
          <hr>
          <p class="content_text">
            Of course! We will always do our best to do your favourite songs justice to help make your event extra special!
          </p>
        </div>  
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
        <div class="col-sm-12 col-md-6">
          <hr>
          <p class="logo_sub_text_white">I'd highly recommend Funk & Fable. I hired Beth and Connor for a private party. Their communication was excellent leading up to the event which included any preferences for the set list. Professional and friendly, they were so easy going and performed from a range of genres (something for everyone) adding in plenty of my favourites! Guests were really impressed with their sound and Beth's vocals. They were also really engaging with the guests and provided a relaxed atmosphere on a hot afternoon. I'd most definitely book Funk & Fable again.</p>
          <p class="logo_sub_text_white">- Rhiannon</p>
        </div> 
        <div class="col-sm-12 col-md-6">
          <hr>
          <p class="logo_sub_text_white">We couldn’t be happier with Funk and Fable — they were absolutely fantastic from start to finish! They went above and beyond by learning two special songs just for us, which meant so much and made the day even more memorable. They arrived fully prepared, brought all their own equipment, and set everything up seamlessly without any hassle. At one point, we even put them on the spot with a song request they hadn’t prepared, and they still pulled it off brilliantly — it turned into one of the most unforgettable moments of the day. They were also amazing with the kids, even surprising them with a little 'Frozen' performance that had everyone smiling. Truly professional, talented, and thoughtful — we’re so grateful they were part of our day.</p>
          <p class="logo_sub_text_white">- Shannon</p>
        </div>
        <div class="col-sm-12 col-md-6">
          <hr>
          <p class="logo_sub_text_white">Loved watching these guys last night! Great style of music and loved Bethany's voice!</p>
          <p class="logo_sub_text_white">- Shannon</p>
        </div> 
      </div>
    </div>
  </div>
    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div> 


    </div>
      
@endsection
