@extends('layouts.app')

@section('content')

    <section class="secondary-section wave-bottom"></section>
    <div class="section_gap"></div>

    <div class="container">
      <div class="row">
        <h1 class="inform_text pt-4 mt-4"><u>Frequently asked questions</u></h1>
        <div class="col-sm-12 text-center py-4 my-4">
            <a href="#" 
                title="Ask a new question" 
                aria-label="Ask a new question" 
                data-bs-toggle="modal" 
                data-bs-target="#askQuestionModal"            
                class="btn btn-primary btn-sm px-4 py-2 rounded-5 shadow-sm hover-button item">
                    Ask a new question
            </a>
            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif            
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

<!-- Modal for question -->

<div class="modal fade" id="askQuestionModal" tabindex="-1" aria-labelledby="askQuestionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="askQuestionModalLabel">Ask a New Question</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{ route('faq.create') }}" method="POST">
        @csrf

        <div class="modal-body">
          <!-- Honeypot (bots fill this) -->
          <input type="text" name="website" style="display:none">
          <!-- Question -->
          <div class="mb-3">
            <label for="questionInput" class="form-label">Your Question</label>
            <textarea class="form-control" id="questionInput" name="question" rows="3" required></textarea>
          </div>
          <!-- Email (optional) -->
          <div class="mb-3">
            <label for="emailInput" class="form-label">Email (optional)</label>
            <input type="email" class="form-control" id="emailInput" name="email">
          </div>
          <!-- Name (optional) -->
          <div class="mb-3">
            <label for="name" class="form-label">Name (optional)</label>
            <input type="name" class="form-control" id="name" name="name">
          </div>
          <!-- Human check -->
          <div class="mb-3">
            <label for="humanCheck" class="form-label">
              Are you human? What is <strong>3 + 4</strong>?
            </label>
            <input type="text" class="form-control" id="humanCheck" name="human_check" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit Question</button>
        </div>
      </form>

    </div>
  </div>
</div>

@endsection
