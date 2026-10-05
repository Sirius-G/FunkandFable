@extends('layouts.app')

@section('content')

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>

    <div class="container">
      <div class="row"><!--col-md-5 -->
        <div class="col-sm-12 py-4 my-4">
            <h1 class="inform_text pt-4 mt-4"><u>Media</u></h1>
            <p class="logo_sub_text">
                {!! $media->sections['section1'] ?? '' !!}<br>
                {!! $media->sections['section2'] ?? '' !!}<br>
                {!! $media->sections['section3'] ?? '' !!}
            </p>
            <!-- <div class="text-center">
                <img src="images/svg/divider.png" alt="Funk and Fable logo" width="100%">
            </div> -->
        </div>
        <!-- <div class="col-sm-12 col-md-7 text-center py-4 my-4">
            @if(count($banner)>0)
            @foreach($banner as $b)
                <img src="images/{{$b->image_name}}" alt="{{$b->alt}}" width="100%" class="about_banner_mob">
                <img src="images/{{$b->image_name}}" alt="{{$b->alt}}" width="100%" class="about_banner">
            @endforeach
            @endif
        </div> -->
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


                    <!-- Thumbnail Grid
                    <div class="row">
                        @foreach($videos as $video)
                            <div class="col-3 col-md-4 mb-4 text-center">
                                <img
                                src="https://img.youtube.com/vi/{{ $video->youtube_id }}/hqdefault.jpg"
                                class="img-fluid video-thumb video_thumb"
                                data-video="{{ $video->youtube_id }}">
                                <hr><p class="mt-2">{{ $video->title }}</p>
                            </div>
                        @endforeach
                    </div> -->
                    <!-- Thumbnail Carousel -->
                    <div id="videoThumbnailCarousel" class="carousel slide" data-bs-interval="false">

                        <div class="carousel-inner">

                            @foreach($videos->chunk(3) as $chunkIndex => $videoChunk)

                                <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">

                                    <div class="row">

                                        @foreach($videoChunk as $video)

                                            <div class="col-4 mb-4 text-center">

                                                <img
                                                    src="https://img.youtube.com/vi/{{ $video->youtube_id }}/hqdefault.jpg"
                                                    class="img-fluid video-thumb video_thumb"
                                                    data-video="{{ $video->youtube_id }}"
                                                    style="cursor: pointer;"
                                                >

                                                <hr>
                                                <p class="mt-2">{{ $video->title }}</p>

                                            </div>

                                        @endforeach

                                    </div>

                                </div>

                            @endforeach

                        </div>

                        <!-- Previous -->
                        <button class="carousel-control-prev" type="button"
                                data-bs-target="#videoThumbnailCarousel"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <!-- Next -->
                        <button class="carousel-control-next" type="button"
                                data-bs-target="#videoThumbnailCarousel"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

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
                const mainVideo = document.getElementById('main-video');
                mainVideo.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
                // scroll iframe into view when video changes
                mainVideo.scrollIntoView({ behavior: 'smooth', block: 'start' });
                            // Then scroll up an additional 50px
                setTimeout(() => {
                    window.scrollBy({ top: -100, behavior: 'smooth' });
                }, 300); // delay to allow scrollIntoView to start
            });
        });

    showActive(5);
    </script>

@endsection
