<x-admin-master>

@section('content')
<div class="container">
    <h1>Edit Package</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('package.update', $package->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="package" class="form-label">Package</label>
            <textarea name="package" id="package" rows="10" class="form-control @error('package') is-invalid @enderror" required>{{ old('package', $package->package) }}</textarea>
            @error('package')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="added_by" class="form-label">Added by</label>
            <input type="text" name="added_by" id="added_by" class="form-control @error('added_by') is-invalid @enderror" value="{{ old('added_by', $package->added_by) }}" required >
            @error('added_by')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="confirmation" class="form-label">Display:</label>
            <select name="confirmation" id="confirmation" 
                    class="form-control @error('confirmation') is-invalid @enderror" required>
                <option value="">-- Please Select --</option>
                <option value="Yes" {{ old('confirmation', $package->confirmation) == 'Yes' ? 'selected' : '' }}>Yes</option>
                <option value="No" {{ old('confirmation', $package->confirmation) == 'No' ? 'selected' : '' }}>No</option>
            </select>

            @error('confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">
            <small>
                Created at: {{ $package->created_at->format('Y-m-d H:i') }}<br>
                Updated at: {{ $package->updated_at->format('Y-m-d H:i') }}<br>
                @if($package->deleted_at)
                    Deleted at: {{ $package->deleted_at->format('Y-m-d H:i') }}
                @endif
            </small>
        </div>

        <button type="submit" class="btn btn-success">Update Package</button>
        <a href="{{ route('admin.packages') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection


</x-admin-master>