@extends('layouts.loadingpage')

@section('content')

<div class="logocontainer text-center">
    <div class="cover">
      <img src="images/svg/F&FLogoLinear.svg" class="logolinear" style="margin-top:-300px;" alt="Funk and Fable logo">
      <img src="images/svg/F&FLogoStacked.svg" class="logostacked" style="margin-top:-100px;" alt="Funk and Fable logo">
      <p class="logo_sub_text_white sub_text">Professional Acoustic Band</p>
      <br><br>
      <div class="container">
        <div class="card mt-4 opacity-75">
            <div class="card-header greenheader opacity-75">
                <strong class="text-white">{{ __('503 Error') }}</strong>
                </div>
                <div class="card-body">
                    <h1>We'll be back soon!</h1>
                    <br>
                    <p>Sorry for the inconvenience.
                      <br>We're performing some maintenance right now.
                      <br>Please check back later.
                    </p>
                </div>  
            </div>
        </div>
    </div>
</div>

@endsection
