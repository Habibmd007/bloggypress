@extends('admin.master')

@section('body')


<!-- Post Author Start -->
<a name="" id="" class="btn btn-primary mb-3" href="{{route('add-post')}}" role="button"> <i class="fa fa-plus" aria-hidden="true"></i> Add Post </a>
<hr>
    
        @foreach ($posts as $item)
            
        <div class="card">
            <div class="card-body">
                    <div class="row">
                            <div class="col-md-6 pb--60">
                                <!-- Video Block Start -->
                                <div class="video--block embed-responsive embed-responsive-16by9">
                                    <iframe src="{{$item->video}}" allowfullscreen=""></iframe>
                                </div>
                                <!-- Video Block End -->
                            </div>
                
                            <div class="col-md-6 pb--60">
                                <!-- Text Block Start -->
                                <div class="text--block">
                                    <h3>{{$item->head}}</h3>
                
                                    <p>{{$item->text}}</p>
                
                                    <blockquote>
                                        <p>{{$item->qoute}}</p>
                                    </blockquote>
                                </div>
                                <!-- Text Block End -->
                            </div>
                        </div>
                <p class="btn btn-info" role="button">Publication Status : {{ $item->status==1 ?"Published" : "Unpublished"}}</p>
                <a name="" id="" class="btn btn-primary mb-3" href="{{route('edit-post',['id'=> $item->id])}}" role="button"> <i class="fa fa-edit" aria-hidden="true"></i>  </a>
                <a name="" id="" class="btn btn-primary mb-3" href="{{route('delete-post',['id'=> $item->id])}}" role="button"> <i class="fa fa-trash" aria-hidden="true"></i>  </a>
            </div>
        </div>
        @endforeach

<!-- Post Author End -->
@endsection