@extends('admin.master')

@section('body')
<h3>All Blog Posts</h3>
<a name="" id="" class="btn btn-primary mb-3" href="{{route('add-blogpost')}}" role="button"> <i class="fa fa-plus" aria-hidden="true"></i> Add Post </a>
@foreach ($posts as $post)
<div class="card">
    <div class="card-body">
            <a name="" id="" class="btn btn-info mb-3" href="{{route('blog-singlepost',['id' => $post->id])}}" role="button"> <i class="fa fa-eye" aria-hidden="true"></i> View </a>
            <a name="" id="" class="btn btn-warning mb-3" href="{{route('blog-editepost',['id' => $post->id])}}" role="button"> <i class="fa fa-edit" aria-hidden="true"></i> Edit </a>
            <a name="" id="" class="btn btn-danger mb-3" href="{{route('blog-deletepost',['id' => $post->id])}}" role="button" onclick="return confirm('Are sure delete this ??? ')"> <i class="fa fa-trash" aria-hidden="true"></i> Delete </a>

            <a href="{{route('blog-singlepost',['id' => $post->id])}}">
                @php
                    $sliders= DB::table('sliders')->where('blogpost_id', $post->id)->where('status', 1)->take(1)->get();
                @endphp
              

                <div class="row">
                    <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                            <!-- Post Item Start -->
                            <div class="post--item">
                                <!-- Post Image Start -->
                                <div class="post--img">
                                    @foreach ($sliders as $slider)
                                    <a href="{{route('blog-singlepost',['id' => $post->id])}}"><img src="{{asset($slider->sli_img)}}" alt="" height="100"></a>
                                    @endforeach
                                </div>
                                <!-- Post Image End -->
    
                                <!-- Post Title Start -->
                                <div class="post--title text-center">
                                    <h5 class="h5"><a href="{{route('blog-singlepost',['id' => $post->id])}}" class="btn-link">{{$post->head}}</a></h5>
                                </div>
                                <!-- Post Title End -->
                            </div>
                            <!-- Post Item End -->
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endforeach
@endsection