<x-admin-master>

@section('content')
<div class="container">
    <h1>{{ __('Dashboard') }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Details</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Here, in the future, we can add stats such as:

                    <ul class="list-group mb-3">
                        <li class="list-group-item"><i class="fa fa-users fa-lg"></i> How many user logins</li>
                        <li class="list-group-item"><i class="fa fa-chart-bar fa-lg"></i> Page view count</li>
                        <li class="list-group-item"><i class="fa fa-question fa-lg"></i> Faq count</li>
                        <li class="list-group-item"><i class="fa fa-star fa-lg"></i> Testimonial count</li>
                        <li class="list-group-item"><i class="fa fa-link fa-lg"></i> Quick access links to the most frequently used admin features</li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
<div class="section_gap"<br><br></div>
@endsection

</x-admin-master>
