@extends('layouts.app')
<?php
session()->put('uri', $_SERVER['REQUEST_URI']);
?>

@section('content')
<div class="container text-center">
    <div class="logo_text">Funk and Fable</div>
    <div class="sub_text mb-4">Professional Acoustic Band</div>
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
    <br><br><br>
</div>
<script>
    setTimeout(function(){
        history.back(-1);
    }, 5000);
</script>
@endsection
