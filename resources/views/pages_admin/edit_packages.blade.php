<x-admin-master>


@section('content')
<div class="container">
    <h1>Packages</h1>

    @if($packages->count())
        <ul class="list-group p-4">
            @foreach($packages as $t)
                <li class="list-group-item d-flex justify-content-between align-items-start
                    {{ $t->deleted_at ? 'list-group-item-secondary' : '' }}">
                    <div>
                        <strong>Packages:</strong> {{ $t->package }}<br>
                        <strong>Added by:</strong> {{ $t->added_by }}<br>
                        <strong>Display:</strong> {{ $t->confirmation }}<br>
                        <small>
                            Created: {{ $t->created_at->format('Y-m-d H:i') }} |
                            Updated: {{ $t->updated_at->format('Y-m-d H:i') }}
                            @if($t->deleted_at)
                                | Deleted: {{ $t->deleted_at->format('Y-m-d H:i') }}
                            @endif
                        </small>
                    </div>
                    <div>
                        @if(!$t->deleted_at)
                            <a href="{{ route('package.edit', $t->id) }}" class="btn btn-primary btn-sm px-4 py-2 rounded-3 shadow-sm hover-button btn-sm">Edit</a>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>No packages found.</p>
    @endif
</div>
@endsection

</x-admin-master>