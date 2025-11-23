@extends('layouts.loadingpage')

@section('content')
<div class="logocontainer text-center">
    <div class="cover">
      <img src="{{asset('/images/svg/F&FLogoLinear.svg')}}" class="logolinear" alt="Funk and Fable logo">
      <img src="{{asset('/images/svg/F&FLogoStacked.svg')}}" class="logostacked" alt="Funk and Fable logo">
      <p class="logo_sub_text_white sub_text">Professional Acoustic Band</p>
    </div>
</div>
<div id="progress-bar-container">
    <div id="progress-bar"></div>
</div>

<script>
    const progressBar = document.getElementById("progress-bar");

    // Kick off animation shortly after page load
    window.onload = () => {
      progressBar.style.width = "100%";

      // Start fade-out just before redirect
      setTimeout(() => {
        document.body.classList.add("fade-out");
      }, 2500); // allow full bar to show

      // Redirect after fade
      setTimeout(() => {
        window.location.href = "/home";
      }, 3000); // total duration = 3 seconds
    };
  </script>

@endsection