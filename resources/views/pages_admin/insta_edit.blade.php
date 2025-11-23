<x-admin-master>

@section('content')
<div class="container">
    <h1>Edit Instagram posts</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('insta.update', $insta->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" 
                   value="{{ old('url', $insta->url) }}" required>
            @error('url')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Description</label>
            <textarea name="content" id="content" rows="5" class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $insta->content) }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <small>
                Created at: {{ $insta->created_at->format('Y-m-d H:i') }}<br>
                Updated at: {{ $insta->updated_at->format('Y-m-d H:i') }}<br>
                @if($insta->deleted_at)
                    Deleted at: {{ $insta->deleted_at->format('Y-m-d H:i') }}
                @endif
            </small>
        </div>

        <button type="submit" class="btn btn-success">Update Instagram posts</button>
        <a href="{{ route('admin.insta') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection


</x-admin-master>