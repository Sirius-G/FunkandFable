<x-admin-master>

@section('content')


<div class="container">
    <h1>Edit image</h1>
    <div class="card p-4" style ="background-color: rgba(255,255,255,0.5);">
        <div class="row">
            @if(count($banner_image)>0)
            @foreach($banner_image as $im)
                <form action="{{ route('banner.update')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$im->id}}">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 mt-4">
                            CURRENT IMAGE: {{$im->image_name}} 
                            <br>
                            <img src="{{ asset('images/' . $im->image_name) }}" style="width: 100%;"/>

                        </div>            
                        
                        <div class="col-sm-12 col-md-9 mt-4">
                            <label class="fw-bold"> Choose image: (optional)</label><br>
                            <small class="fw-bold">(jpg, jpeg or png format recommended)</small>
                            <input type="file" class="form-control" name="image_name"> 
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 mt-4">
                            <label class="fw-bold">Alternative image text: (required)</label>
                            <input type="text" class="form-control" placeholder="Max 200 Characters - Alphanumeric Characters Only" name="alt" maxlength="200" value="{{$im->alt}}" required> 
                        </div>
                    </div>
                    
                    <br>
                    <button class="btn btn-primary btn-sm px-4 py-2 rounded-3 shadow-sm hover-button" type="submit">
                        <i class="fa fa-image fa-lg"></i> Update Image
                    </button> 
                </form>
            @endforeach
            @endif
        </div>
    </div> 
</div>                          

@endsection

</x-admin-master>



 