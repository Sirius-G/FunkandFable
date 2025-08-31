@extends('layouts.loadingpage')

@section('content')

<div class="logocontainer text-center">
    <div class="cover">
      <img src="images/svg/F&FLogoLinear.svg" class="logolinear" alt="Funk and Fable logo">
      <img src="images/svg/F&FLogoStacked.svg" class="logostacked" alt="Funk and Fable logo">
      <p class="logo_sub_text_white sub_text">Professional Acoustic Band</p>
      <br><br>
      <strong class="text-white">{{ __('503 Error') }}</strong>
      <div class="inform_text">We'll be back soon!</div>
      <p class="mx-4 inform_sub_text">Sorry for the inconvenience.
      <br>We're performing some maintenance right now.
      <br>Please check back later.</p>
    </div>
</div>

@endsection
