@extends('layouts.loadingpage')

@section('content')
<div class="container text-center">
    <div class="logo_text">Funk and Fable</div>
    <div class="logo_sub_text mb-4">Professional Acoustic Band</div>
    <div class="card mt-4">
        <div class="card-header greenheader">
            <strong class="text-white">{{ __('503 Error') }}</strong>

            </div>
            <div class="card-body bg-white">
                <h1>We'll be back soon!</h1>
                <br>
                <p>Sorry for the inconvenience. We're performing some maintenance right now.<br>Please check back later.</p>
            </div>  
        </div>
    <br><br><br>
</div>
@endsection
