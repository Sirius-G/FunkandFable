<x-admin-master>

@section('content')
<div class="container">
    <h1>Edit Video</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('video.update', $video->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="youtube_id" class="form-label">Youtube ID</label>
            <input type="text" name="youtube_id" id="youtube_id" class="form-control @error('youtube_id') is-invalid @enderror" 
                   value="{{ old('youtube_id', $video->youtube_id) }}" required>
            @error('youtube_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <textarea name="title" id="title" rows="5" class="form-control @error('title') is-invalid @enderror" required>{{ old('title', $video->title) }}</textarea>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <small>
                Created at: {{ $video->created_at->format('Y-m-d H:i') }}<br>
                Updated at: {{ $video->updated_at->format('Y-m-d H:i') }}<br>
                @if($video->deleted_at)
                    Deleted at: {{ $video->deleted_at->format('Y-m-d H:i') }}
                @endif
            </small>
        </div>

        <button type="submit" class="btn btn-success">Update Video</button>
        <a href="{{ route('admin.videos') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection


</x-admin-master>