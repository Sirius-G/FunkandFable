@extends('layouts.app')

@section('content')

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 p-4 my-4"> <!--css services_border-->
            <h1 class="inform_text pt-4 mt-4"><u>Services</u></h1>
            <h2><strong>{!! $offer->sections['section1'] ?? '' !!}</strong></h2>
            <p class="logo_sub_text">{!! $offer->sections['section2'] ?? '' !!}</p>
            <p class="logo_sub_text">{!! $offer->sections['section3'] ?? '' !!}</p>
            <div class="text-center">
                <img src="/images/svg/divider.png" alt="Funk and Fable logo" width="100%" class="my-2">
            </div> 
        </div>
        <div class="col-sm-12 col-md-6 text-center py-4 my-4">
            @if(count($banner)>0)
            @foreach($banner as $b)
                <img src="images/{{$b->image_name}}" alt="{{$b->alt}}" width="100%">
            @endforeach
            @endif
        </div>
      </div>
    </div>

    <div class="section_gap"></div>
    <section class="secondary-section wave-top"></section>

    <div class="bg_primary">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="inform_text">Our packages</h2><br>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($packages as $package)
                        <div class="raw-testimonial d-none">
                            <div class="card shadow-sm h-100 border-1">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <p class="card-text">{!! $package->package !!}</p>
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
    
    <script>showActive(3);</script>
@endsection
