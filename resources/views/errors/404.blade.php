@extends('layouts.loadingpage')
<?php
session()->put('uri', $_SERVER['REQUEST_URI']);
?>

@section('content')
<div class="logocontainer text-center">
    <div class="cover">
      <img src="images/svg/F&FLogoLinear.svg" class="logolinear" alt="Funk and Fable logo">
      <img src="images/svg/F&FLogoStacked.svg" class="logostacked" alt="Funk and Fable logo">
      <p class="logo_sub_text_white sub_text">Professional Acoustic Band</p>
      <br><br>
      <div class="container">
        <div class="card mt-4">
            <div class="card-header greenheader">
                <strong class="text-white">{{ __('404 Error') }}</strong>

                </div>
                <div class="card-body bg-white">
                    <h1>Page not found</h1>
                    <br>
                    <p>...redirecting, please wait!</p>
                </div>  
            </div>
        </div>
    </div>
    </div>
</div>
<script>
    setTimeout(function(){
        history.back(-1);
    }, 5000);
</script>
@endsection
