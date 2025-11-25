<x-admin-master>

@section('content')
<div class="container">
    <h1>Edit Testimonial</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="testimonial" class="form-label">Testimonial</label>
            <textarea name="testimonial" id="testimonial" rows="10" class="form-control @error('testimonial') is-invalid @enderror" required>{{ old('testimonial', $testimonial->testimonial) }}</textarea>
            @error('testimonial')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="added_by" class="form-label">Added by</label>
            <input type="text" name="added_by" id="added_by" class="form-control @error('added_by') is-invalid @enderror" value="{{ old('added_by', $testimonial->added_by) }}" required >
            @error('added_by')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="confirmation" class="form-label">Display:</label>
            <select name="confirmation" id="confirmation" 
                    class="form-control @error('confirmation') is-invalid @enderror" required>
                <option value="">-- Please Select --</option>
                <option value="Yes" {{ old('confirmation', $testimonial->confirmation) == 'Yes' ? 'selected' : '' }}>Yes</option>
                <option value="No" {{ old('confirmation', $testimonial->confirmation) == 'No' ? 'selected' : '' }}>No</option>
            </select>

            @error('confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">
            <small>
                Created at: {{ $testimonial->created_at->format('Y-m-d H:i') }}<br>
                Updated at: {{ $testimonial->updated_at->format('Y-m-d H:i') }}<br>
                @if($testimonial->deleted_at)
                    Deleted at: {{ $testimonial->deleted_at->format('Y-m-d H:i') }}
                @endif
            </small>
        </div>

        <button type="submit" class="btn btn-success">Update Testimonial</button>
        <a href="{{ route('admin.testimonials') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection


</x-admin-master>