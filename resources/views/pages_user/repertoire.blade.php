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

                    <!-- ****** Change this to put all in own sections so can manipulate order etc -->
                    @php
                        $songs = $list->sections['section2'] ?? '';
                        $songsArray = array_map('trim', explode('<br>', $songs));
                    @endphp
                    <p class="logo_sub_text_white_small">
                        @foreach($songsArray as $song)
                            {{ $song }}<br>
                        @endforeach 
                    </p>
                    <h2 class="inform_text pt-4 mt-4">1990s</h2>
                    <hr>
                    <p class="logo_sub_text_white_small">
                        What's Up? - The 4 Non Blondes<br>
                        You've Got A Friend In Me - Randy Newman<br>
                        Kiss Me - Sixpence None the Richer<br>
                        Cosmic Girl - Jamiroquai<br>
                        Alright - Supergrass<br>
                        Torn - Natalie Imbruglia<br>
                        Learn to Fly - Foo Fighters<br>
                        Everlong - Foo Fighters<br>
                        All The Small Things - Blink 182<br>
                        You Get What You Give - New Radicals<br>
                        Ironic - Alanis Morisette<br>
                        Breakfast at Tiffanys - Deep Blue Something<br>
                        Linger - The Cranberries<br>
                        Just a Girl - No Doubt<br>
                        Love Fool - The Cardigans<br>
                        ...Baby One More Time - Britney Spears<br>
                        There She Goes - The La’s<br>
                        Ironic - Alanis Morissette<br>
                        Man! I Feel Like a Woman! - Shania Twain<br>
                        You're Still The One - Shania Twain<br>
                        More Than Words - Extreme<br>                    
                    </p>
                    
                    <h2 class="inform_text pt-4 mt-4">1970s</h2>
                    <hr>                    
                    <p class="logo_sub_text_white_small">
                        Isn't She Lovely - Stevie Wonder<br>
                        Superstition - Stevie Wonder<br>
                        Higher Ground - Stevie Wonder<br>
                        Signed, Sealed, Delivered (I'm Yours) - Stevie Wonder<br>
                        Landslide - Fleetwood Mac<br>
                        Go Your Own Way - Fleetwood Mac<br>
                        Rhiannon - Fleetwood Mac<br>
                        Jolene - Dolly Parton<br>
                        Rock With You - Michael Jackson<br>
                        September - Earth, Wind and Fire<br>
                        We Are Family - Sister Sledge<br>
                        Good Times - Chic<br>
                        Dancing Queen - ABBA<br>                    
                    </p>
                </div>    
                <div class="col-sm-6 my-4">
                    <h2 class="inform_text pt-4 mt-4">2000s</h2>
                    <hr>
                    <p class="logo_sub_text_white_small">
                        Love Song - Sara Bareilles<br>
                        Crazy In Love - Beyonce<br>
                        Put Your Records On - Corinne Bailey Rae<br>
                        Valerie - Mark Ronson ft. Amy Winehouse<br>
                        You’ve Got The Love - Florence and the Machine<br>
                        Take Your Mama - Scissor Sisters<br>
                        Suddenly I See - KT Tunstall<br>
                        Teenage Dirtbag - Wheetus<br>
                        All About You - McFly<br>
                        Obviously - McFly<br>
                        Five Colours In Her Hair - McFly<br>
                        Crashed The Wedding - Busted<br>
                        I Don't Feel Like Dancin' - Scissor Sisters<br>
                        Crazy - Gnarls Barkley<br>
                        She's So Lovely - Scouting for Girls<br>
                        Star Girl - McFly<br>
                        American Boy - Estelle<br>
                        Murder On The Dancefloor - Sophie Ellis-Bextor<br>
                        Since U Been Gone - Kelly Clarkson<br>
                        Life Is a Highway - Rascal Flatts<br>
                        Can't Stop - Red Hot Chili Peppers<br>
                        Unwritten - Natasha Bedingfield<br>
                        A Thousand Years - Christina Perri<br>
                    </p>
                    <h2 class="inform_text pt-4 mt-4">1980s</h2>
                    <hr>
                    <p class="logo_sub_text_white_small">
                        I Wanna Dance With Somebody - Whitney Houston<br>
                        The Power of Love - Huey Lewis and the News<br>
                        Never Too Much - Luther Vandross<br>
                        The Way You Make Me Feel - Michael Jackson<br>
                        I'm Coming Out - Diana Ross<br>
                        9 to 5 - Dolly Parton<br>
                        Faith - George Michael<br>
                        Everywhere - Fleetwood Mac<br>
                        Walking on Sunshine - Katrina and the Waves<br>
                        Heart of Glass - Blondie<br>
                        Girls Just Want to Have Fun - Cyndi Lauper<br>
                        Livin' on a Prayer - Bon Jovi<br>
                        How Will I Know - Whitney Houston<br>
                        The Best - Tina Turner<br>
                        Summer of '69 - Bryan Adams<br>
                        A Little Respect - Erasure<br>
                        Everybody Wants to Rule the World - Tears for Fears<br>
                    </p>
                    
                    <h2 class="inform_text pt-4 mt-4">1960s</h2>
                    <hr>                    
                    <p class="logo_sub_text_white_small">
                        Sunny - Bobby Hebb<br>
                        Stand By Me - Ben E. King<br>
                        I Saw Her Standing There - The Beatles<br>
                        Twist and Shout - The Beatles<br>
                        I'm A Believer - The Monkees<br>
                        All My Loving - The Beatles<br>
                        Bad Moon Rising - Creedence Clearwater Revival<br>
                        Brown Eyed Girl - Van Morrison<br>
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
