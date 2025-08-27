@extends('layouts.app')

@section('content')
    <div class="page_banner">
        @if(count($banner)>0)
        @foreach($banner as $b)
            <img src="images/{{$b->image_name}}" alt="{{$b->alt}}" class="headerimage">
        @endforeach
        @endif
        <h1 class="logo_text">Funk & Fable</h1>
        <a href="#CARDTOP" title="Make a booking or enquiry" aria-label="Make a booking or enquiry" class="btn btn-primary btn-sm px-4 py-2 rounded-3 shadow-sm hover-button item overbanner">
            <strong>Want to make a booking or enquiry?<br>Click here!</strong>
        </a>
    </div>


        <div class="container">

  
                    
                    <br><br><br><br>
                     <h2 class="fabled_feedback_text">Fabled Feedback</h2>

                                         <br><br><br><br>
                     <p class="content_text">
I'd highly recommend Stellar Acoustics. I hired Beth and Connor for a private party. Their communication was excellent leading up to the event which included any preferences for the set list. Professional and friendly, they were so easy going and performed from a range of genres (something for everyone) adding in plenty of my favourites! Guests were really impressed with their sound and Beth's vocals. They were also really engaging with the guests and provided a relaxed atmosphere on a hot afternoon. I'd most definitely book Stellar Acoustics again.</p>

</div>


  <!-- Section with soft, random top wave -->
  <section class="secondary-section wave-top">
    <h1>Soft Random Wave Top</h1>
    <p>This wave edge is smooth and flowing, perfect for a modern, artsy vibe.</p>
  </section>

  <!-- Section with soft, random bottom wave -->
  <section class="secondary-section wave-bottom">
    <h2>Soft Random Wave Bottom</h2>
    <p>The organic curve blends sections naturally, avoiding sharp transitions.</p>
  </section>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



            
@endsection
