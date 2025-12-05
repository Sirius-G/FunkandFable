<x-admin-master>


@section('content')
<div class="container">
    <h1>Testimonials</h1>

    @if($testimonials->count())
        <ul class="list-group p-4">
            @foreach($testimonials as $t)
                <li class="list-group-item d-flex justify-content-between align-items-start
                    {{ $t->deleted_at ? 'list-group-item-secondary' : '' }}">
                    <div>
                        <strong>Testimonials:</strong> {{ $t->testimonial }}<br>
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
                            <a href="{{ route('testimonial.edit', $t->id) }}" class="btn btn-primary btn-sm px-4 py-2 rounded-3 shadow-sm hover-button btn-sm">Edit</a>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>No FAQs found.</p>
    @endif
</div>
@endsection

</x-admin-master>