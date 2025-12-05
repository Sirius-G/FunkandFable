<x-admin-master>


@section('content')
<div class="container">
    <h1>Instagram</h1>

    @if($insta->count())
        <ul class="list-group p-4">
            <div class="row">
            @foreach($insta as $i)
                <div class="col-sm-12 col-md-4">  
                    <p>Preview:</p>
                    <blockquote class="instagram-media" data-instgrm-permalink="{{$i->url}}"></blockquote>
                </div>  
                <div class="col-sm-12 col-md-8">
                <p>Details:</p>
                <li class="list-group-item d-flex justify-content-between align-items-start
                    {{ $i->deleted_at ? 'list-group-item-secondary' : '' }}">
                    <div>
                        <strong>URL:</strong> {{ $i->url }}<br>
                        <strong>Description:</strong> {{ $i->content }}<br>
                        <small>
                            Created: {{ $i->created_at->format('Y-m-d H:i') }} |
                            Updated: {{ $i->updated_at->format('Y-m-d H:i') }}
                            @if($i->deleted_at)
                                | Deleted: {{ $i->deleted_at->format('Y-m-d H:i') }}
                            @endif
                        </small>
                    </div>
                    <div>
                        @if(!$i->deleted_at)
                            <a href="{{ route('insta.edit', $i->id) }}" class="btn btn-primary btn-sm px-4 py-2 rounded-3 shadow-sm hover-button btn-sm">Edit</a>
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