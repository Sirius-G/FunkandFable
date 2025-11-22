@extends('layouts.app')

@section('content')

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>

    <div class="container">
      <div class="row">
        <h1 class="inform_text pt-4 mt-4"><u>Frequently asked questions</u></h1>
        <div class="col-sm-12 text-center py-4 my-4">
            <a href="#" title="" aria-label="" class="btn btn-primary btn-sm px-4 py-2 rounded-5 shadow-sm hover-button item">
                Ask a new question
            </a>
            <br><br>
            <div class="card mx-auto col-sm-10 col-md-8 col-lg-6">
                <div class="card-header text-white bg-secondary">
                    <strong class="p-2"><i class="fa fa-info fa-lg"></i> Advice</strong>
                </div>
                <div class="card-body text-start">        
                    <small class="py-2">
                        We will endeavour to answer new questions within 7 days. If you provide an email address, answers will also be sent to you directly. Once answered, questions will also be published to the site, where appropriate.
                        <br>
                        Thank you
                    </small>
                </div>
            </div>
        </div>     
        

</div></div>
    <div class="section_gap"></div>
    <section class="secondary-section wave-top"></section>
    <div class="bg_primary">
    <div class="container">
      <div class="row">        
        @if(count($faq)>0)
        @foreach($faq as $f)
            <div class="col-sm-12 col-md-6 py-2 my-2">
                <!-- Questions from DB -->
                <hr><p class="fs-5">{{$f->question}}</p>
            </div>
            <div class="col-sm-12 col-md-6 py-2 my-2">
                <!-- Answers from DB -->
                <hr><p class="fs-5">{{$f->answer}}</p>
            </div>
        @endforeach
        @else 
            <div class="col-sm-12 text-center py-2 my-2">
                <p>Sorry, no frequently asked questions found.</p>
                <p>Click here to ask a new question</p>
            </div>
        @endif
      </div>
    </div>

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>
</div>
      
    <script>showActive(1);</script>
@endsection
