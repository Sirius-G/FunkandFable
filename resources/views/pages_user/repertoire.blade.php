@extends('layouts.app')

@section('content')

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 py-4 my-4">
            <h1 class="inform_text pt-4 mt-4"><u>Repertoire</u></h1>
            <p class="logo_sub_text">{!! $repertoire->sections['section1'] ?? '' !!}</p>
            <div class="text-center">
                <img src="images/svg/divider.png" alt="Funk and Fable logo" width="100%" class="py-4">
            </div>
            <p class="logo_sub_text">{!! $repertoire->sections['section2'] ?? '' !!}</p>

        </div>
        <div class="col-sm-12 col-md-6 text-center py-4 my-4">
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
                <div class="col-sm-6 my-4">
                    <h2 class="inform_text pt-4 mt-4">{!! $list->sections['section1'] ?? '' !!}</h2>
                    <hr>

                    <p class="logo_sub_text_white_small">
                        @foreach(($list->sections ?? []) as $key => $section)
                            @if($key !== 'section1')
                                <div id="{{ $key }}">
                                    {!! $section !!}<br>
                                </div>
                            @endif
                        @endforeach
                    </p>
                    <h2 class="inform_text pt-4 mt-4">{!! $list1->sections['section1'] ?? '' !!}</h2>
                    <hr>
                    <p class="logo_sub_text_white_small">
                        @foreach(($list1->sections ?? []) as $key => $section)
                            @if($key !== 'section1')
                                <div id="{{ $key }}">
                                    {!! $section !!}<br>
                                </div>
                            @endif
                        @endforeach                 
                    </p>
                    
                    <h2 class="inform_text pt-4 mt-4">{!! $list2->sections['section1'] ?? '' !!}</h2>
                    <hr>                    
                    <p class="logo_sub_text_white_small">
                        @foreach(($list2->sections ?? []) as $key => $section)
                            @if($key !== 'section1')
                                <div id="{{ $key }}">
                                    {!! $section !!}<br>
                                </div>
                            @endif
                        @endforeach                  
                    </p>
                </div>    
                <div class="col-sm-6 my-4">
                    <h2 class="inform_text pt-4 mt-4">{!! $list3->sections['section1'] ?? '' !!}</h2>
                    <hr>
                    <p class="logo_sub_text_white_small">
                        @foreach(($list3->sections ?? []) as $key => $section)
                            @if($key !== 'section1')
                                <div id="{{ $key }}">
                                    {!! $section !!}<br>
                                </div>
                            @endif
                        @endforeach
                    </p>
                    <h2 class="inform_text pt-4 mt-4">{!! $list4->sections['section1'] ?? '' !!}</h2>
                    <hr>
                    <p class="logo_sub_text_white_small">
                        @foreach(($list4->sections ?? []) as $key => $section)
                            @if($key !== 'section1')
                                <div id="{{ $key }}">
                                    {!! $section !!}<br>
                                </div>
                            @endif
                        @endforeach
                    </p>
                    
                    <h2 class="inform_text pt-4 mt-4">{!! $list5->sections['section1'] ?? '' !!}</h2>
                    <hr>                    
                    <p class="logo_sub_text_white_small">
                        @foreach(($list5->sections ?? []) as $key => $section)
                            @if($key !== 'section1')
                                <div id="{{ $key }}">
                                    {!! $section !!}<br>
                                </div>
                            @endif
                        @endforeach
                    </p>
                    <div class="text-center">
                        <img src="images/svg/F&FLogoStacked.svg" width="90%" alt="Funk and Fable logo">
                    </div>
                </div>       
            </div>
        </div>
    </div>

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div> 


    </div>
      
    <script>showActive(4);</script>
@endsection
