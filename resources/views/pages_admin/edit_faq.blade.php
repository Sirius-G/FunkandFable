<x-admin-master>


@section('content')
<div class="container">
    <h1>FAQs</h1>

    @if($faqs->count())
        <ul class="list-group p-4">
            @foreach($faqs as $faq)
                <li class="list-group-item d-flex justify-content-between align-items-start
                    {{ $faq->deleted_at ? 'list-group-item-secondary' : '' }}">
                    <div>
                        <strong>Q:</strong> {{ $faq->question }}<br>
                        <strong>A:</strong> {{ $faq->answer }}<br>
                        <small>
                            <strong>Submitted by:</strong> {{ !empty($faq->submitted_by) ? $faq->submitted_by : 'No name provided' }}<br>
                            <strong>Email Address:</strong> {{ !empty($faq->email_address) ? $faq->email_address : 'No email address provided' }}<br>
                            <strong>Created:</strong> {{ $faq->created_at->format('Y-m-d H:i') }} |
                            <strong>Updated:</strong> {{ $faq->updated_at->format('Y-m-d H:i') }}
                            @if($faq->deleted_at)
                                | Deleted: {{ $faq->deleted_at->format('Y-m-d H:i') }}
                            @endif
                        </small>
                    </div>
                    <div>
                        @if(!$faq->deleted_at)
                            <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-primary btn-sm">Edit</a>
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