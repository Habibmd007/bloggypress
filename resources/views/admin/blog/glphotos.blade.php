@extends('admin.master')

@section('body')
<h3>All gallery photos</h3>
@foreach ($glphotos as $glphoto)
    <div class="card">
        <div class="card-body">
            <div class="row">
                <img src="{{asset($glphoto->img)}}" alt="glphoto" height="150">
            </div>
            
            <div class="row">
                    <a name="" id="" class="btn btn-primary " href="{{route('delete-glphoto',['id' => $glphoto->id ])}}" role="button"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
                    <a href="{{route('edit-glphoto',['id' => $glphoto->id ])}}" class="btn btn-info" role="button">Publication Status : {{ $glphoto->status==1 ?"Published" : "Unpublished"}}</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection