@extends('layouts.app')

@section('content')

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 p-4 my-4 services_border">
            <h1 class="inform_text pt-4 mt-4"><u>Services</u></h1>
            <h2 class="inform_text pt-4 mt-4">{!! $offer->sections['section1'] ?? '' !!}</h2>
            <p class="logo_sub_text">{!! $offer->sections['section2'] ?? '' !!}</p>
            <p class="logo_sub_text">{!! $offer->sections['section3'] ?? '' !!}</p>
            <div class="text-center">
                @if(count($banner)>0)
                @foreach($banner as $b)
                    <img src="images/{{$b->image_name}}" alt="{{$b->alt}}" width="72%">
                @endforeach
                @endif
            </div>
        </div>
        <div class="col-sm-12 col-md-6 p-4 my-4">
            @php
                $sections = $details->sections ?? [];
                $chunks = array_chunk($sections, 3, true);
            @endphp

            @foreach($chunks as $group)
                @php $values = array_values($group); @endphp

                @if(isset($values[0]))
                    <h2 class="inform_text pt-4 mt-4">{!! $values[0] !!}</h2>
                @endif

                @if(isset($values[1]))
                    <p class="logo_sub_text_small">{!! $values[1] !!}</p>
                    <br>
                @endif

                @if(isset($values[2]))
                    <p class="logo_sub_text">{!! $values[2] !!}</p>
                    <hr>
                @endif
            @endforeach
            <h2 class="inform_text">{!! $details2->sections['section1'] ?? '' !!}</h2>
            <p class="logo_sub_text_small">{!! $details2->sections['section2'] ?? '' !!}</p>
            <br>
            <p class="logo_sub_text">{!! $details2->sections['section3'] ?? '' !!}</p>
            <p class="logo_sub_text">{!! $details2->sections['section4'] ?? '' !!}</p>
            <p class="logo_sub_text">{!! $details2->sections['section5'] ?? '' !!}</p>
            
        </div>
      </div>
    </div>

    <div class="section_gap"></div>
    <section class="secondary-section wave-top"></section>

    <div class="bg_primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-4">
                    <h2 class="inform_text">Get in touch</h2>
                    <hr>
                    <div class="text-center">
                        <a class="logo_sub_text_white" href="/contact" aria-label="Contact us for more information about your event" title="Contact us for more information about your event" class="text-center">
                            Click here
                        </a> 
                        to contact us for more information on your event
                    </div>
                    <hr>
                </div>        
            </div>
        </div>
    </div>

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div> 


    </div>
    
    <script>showActive(3);</script>
@endsection
