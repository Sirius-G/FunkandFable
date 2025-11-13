<x-admin-master>

@section('content')
<div class="container">
    <h1>Edit FAQ</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="question" class="form-label">Question</label>
            <input type="text" name="question" id="question" class="form-control @error('question') is-invalid @enderror" 
                   value="{{ old('question', $faq->question) }}" required>
            @error('question')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="answer" class="form-label">Answer</label>
            <textarea name="answer" id="answer" rows="5" class="form-control @error('answer') is-invalid @enderror" required>{{ old('answer', $faq->answer) }}</textarea>
            @error('answer')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <small>
                Created at: {{ $faq->created_at->format('Y-m-d H:i') }}<br>
                Updated at: {{ $faq->updated_at->format('Y-m-d H:i') }}<br>
                @if($faq->deleted_at)
                    Deleted at: {{ $faq->deleted_at->format('Y-m-d H:i') }}
                @endif
            </small>
        </div>

        <button type="submit" class="btn btn-success">Update FAQ</button>
        <a href="{{ route('admin.faq') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection


</x-admin-master>