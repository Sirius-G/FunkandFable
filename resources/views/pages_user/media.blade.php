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
            <div class="row mb-4">
                <div class="col-sm-12">
                <h2 class="inform_text">Video Gallery</h2>
                <hr>


                <!-- Main Video Window -->
                <div class="video-container mb-4">
                    <iframe id="main-video" src="https://www.youtube.com/embed/{{ $videos->first()->youtube_id ?? '' }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>


                    <!-- Thumbnail Grid -->
                    <div class="row">
                        @foreach($videos as $video)
                            <div class="col-3 col-md-2 mb-4 text-center">
                                <img
                                src="https://img.youtube.com/vi/{{ $video->youtube_id }}/hqdefault.jpg"
                                class="img-fluid video-thumb video_thumb"
                                data-video="{{ $video->youtube_id }}">
                                <hr><p class="mt-2">{{ $video->title }}</p>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <section class="secondary-section wave-bottom" style="margin-top: -25px;"></section>
    <div class="section_gap"></div> 

                    

    <script>
        document.querySelectorAll('.video-thumb').forEach(thumb => {
            thumb.addEventListener('click', function() {
            const videoId = this.dataset.video;
            document.getElementById('main-video').src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
            });
        });

    showActive(5);
    </script>

@endsection
