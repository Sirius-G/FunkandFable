@extends('layouts.app')

@section('content')

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-5 py-4 my-4">
            <h1 class="inform_text pt-4 mt-4"><u>Media</u></h1>
            <p class="logo_sub_text">
                {!! $media->sections['section1'] ?? '' !!}<br><br>
                {!! $media->sections['section2'] ?? '' !!}<br><br>
                {!! $media->sections['section3'] ?? '' !!}
            </p>
            <div class="text-center">
                <img src="images/svg/divider.png" alt="Funk and Fable logo" width="100%">
            </div>
        </div>
        <div class="col-sm-12 col-md-7 text-center py-4 my-4">
            @if(count($banner)>0)
            @foreach($banner as $b)
                <img src="images/{{$b->image_name}}" alt="{{$b->alt}}" width="100%" class="about_banner_mob">
                <img src="images/{{$b->image_name}}" alt="{{$b->alt}}" width="100%" class="about_banner">
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
                <div class="col-sm-12 mb-4">
                    <h2 class="inform_text">Acoustic Duo Showreel</h2>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="video-container">
                                <iframe
                                    src="https://www.youtube.com/embed/8azP-BGWc1M" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                                </iframe>
                            <br>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>        
            </div>
        </div>
    </div>

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div> 


    </div>
      
    <script>showActive(5);</script>
@endsection
