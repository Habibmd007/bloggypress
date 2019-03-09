@extends('admin.master')

@section('body')
<a name="" id="" class="btn btn-primary mb-3" href="{{route('add-slider')}}" role="button"> <i class="fa fa-plus" aria-hidden="true"></i> Add Slider </a>
@foreach ($sliders as $item)
    <div class="card">
        <div class="card-body">
            <div class="row">
                <img src="{{$item->img}}" alt="slider" height="150">
            </div>
            
            <div class="row">
                <a href="{{route('edit-slider',['id' => $item->id ])}}" class="btn btn-info" role="button">Publication Status : {{ $item->status==1 ?"Published" : "Unpublished"}}</a>
                <a name="" id="" class="btn btn-primary mb-3" href="{{route('delete-slider',['id' => $item->id ])}}" role="button"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
            </div>
        </div>
    </div>
    @endforeach
@endsection