@extends('admin.master')

@section('body')
<h3>Sliders</h3>
@foreach ($sliders as $slider)
    <div class="card">
        <div class="card-body">
            <div class="row">
                <img src="{{asset($slider->img)}}" alt="slider" height="150">
            </div>
            
            <div class="row">
                    <a name="" id="" class="btn btn-primary " href="{{route('delete-slider',['id' => $slider->id ])}}" role="button"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
                    <a href="{{route('edit-slider',['id' => $slider->id ])}}" class="btn btn-info" role="button">Publication Status : {{ $slider->status==1 ?"Published" : "Unpublished"}}</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection