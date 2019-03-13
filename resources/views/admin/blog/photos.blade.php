@extends('admin.master')

@section('body')
<a name="" id="" class="btn btn-primary mb-3" href="{{route('add-photo')}}" role="button"> <i class="fa fa-plus" aria-hidden="true"></i> Add Photo </a>
<div class="card">
    <div class="card-body">
            @foreach ($photos as $photo)
            <div class="row pt--10">

            
                    <div class="col-sm-3 col-xs-5 pb--30">
                            <p><img src="{{$photo->img}}" alt="" class="center-block" height="200"></p>
                            <input type="text" value="{{asset('/').$photo->img}}" >
                            <a href="{{route('edit-photo',['id' => $photo->id ])}}" class="btn btn-info" role="button">Publication Status : {{ $photo->status==1 ?"Published" : "Unpublished"}}</a>
                            <a name="" id="" class="btn btn-primary mb-3" href="{{route('delete-photo',['id' => $photo->id ])}}" role="button"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
                    </div>
                    
            </div>            
            @endforeach
        </div>
    </div>
@endsection