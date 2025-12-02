<x-admin-master>


@section('content')
<div class="container">
    <h1>Videos</h1>

    @if($videos->count())
        <ul class="list-group p-4">
            <div class="row">
            @foreach($videos as $v) 
                <div class="col-sm-12 col-md-2 mb-4 text-center">
                    <img
                    src="https://img.youtube.com/vi/{{ $v->youtube_id }}/hqdefault.jpg"
                    class="img-fluid video-thumb video_thumb"
                    data-video="{{ $v->youtube_id }}">
                    <hr><p class="mt-2">{{ $v->title }}</p>
                </div> 
                <div class="col-sm-12 col-md-10">
                <p>Details:</p>
                <li class="list-group-item d-flex justify-content-between align-items-start
                    {{ $v->deleted_at ? 'list-group-item-secondary' : '' }}">
                    <div>
                        <strong>Youtube ID:</strong> {{ $v->youtube_id }}<br>
                        <strong>Title:</strong> {{ $v->title }}<br>
                        <small>
                            Created: {{ $v->created_at->format('Y-m-d H:i') }} |
                            Updated: {{ $v->updated_at->format('Y-m-d H:i') }}
                            @if($v->deleted_at)
                                <strong>| Deleted: {{ $v->deleted_at->format('Y-m-d H:i') }}</strong>
                            @endif
                        </small>
                    </div>
                    <div>
                        @if(!$v->deleted_at)
                            <a href="{{ route('video.edit', $v->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('video.delete', $v->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                    Delete
                                </button>
                            </form>
                        @else 
                            <form action="{{ route('video.restore', $v->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success btn-sm">
                                    Restore
                                </button>
                            </form>
                        @endif
                    </div>
                </li></div>
            @endforeach
        </ul>
    @else
        <p>No Instagram records found.</p>
    @endif
    <script async src="https://www.instagram.com/embed.js"></script>
</div></div>
@endsection

</x-admin-master>