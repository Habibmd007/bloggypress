@extends('frontend.home.master')

@section('body')
<!-- Blog Section Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Search Result for : {{$query}}</h3>
                        

                        <div class="row" data-trigger="masonry">



                                @foreach ($search_res as $search_re)
                        

                                <div class="col-sm-6 col-xs-12 pb--60">
                                    <!-- Post Item Start -->
                                    <div class="post--item text-center">
                                        <!-- Post Image Start -->
                                        @if (isset($search_re->slider->sli_img))
                                        <div class="post--img">
                                            <a href="blog-details.html"><img src="{{asset($search_re->slider->sli_img)}}" alt=""></a>
                                        </div>
                                        @else
                                        <div class="post--video">
                                            {!!$search_re->media!!}
                                        </div>
                                        @endif
            
                                        <!-- Post Image End -->
            
                                        <!-- Post Category Start -->
                                        <div class="post--cat">
                                            <a href="" data-overlay="0.5" data-overlay-color="primary">{{$search_re->category->cat}}</a>
                                        </div>
                                        <!-- Post Category End -->
            
                                        <!-- Post Title Start -->
                                        <div class="post--title">
                                            <h2 class="h3"><a href="{{route('blog-post',['id'=> $search_re->id])}}" class="btn-link">{{$search_re->head}}</a></h2>
                                        </div>
                                        <!-- Post Title End -->
            
                                        <!-- Post Excerpt Start -->
                                        <div class="post--excerpt">
                                                {{substr($search_re->post_short,3,150)}}
                                        </div>
                                        <!-- Post Excerpt End -->
            
                                        <!-- Post Action Start -->
                                        <div class="post--action">
                                            <a href="{{route('blog-post',['id'=> $search_re->id])}}" class="btn btn-default">Read More</a>
                                        </div>
                                        <!-- Post Action End -->
            
                                        <!-- Post Meta Start -->
                                        <div class="post--meta clearfix">
                                                <p class="float--left">
                                                    <i class="fa fa-clock-o text-primary"></i>
                                                    <span>{{$search_re->created_at}}</span>
                                                    <a href="{{route('author',['id'=> $search_re->user->id])}}">{{$search_re->user->name}}</a>
                                                </p>
                
                                                <p class="float--right">
                                                    <i class="fa fa-heart-o text-primary"></i>
                                                    <span>{{$search_re->comments->count()}}</span>
                                                </p>
                
                                                <p class="float--right">
                                                    <a href="{{route('blog-post',['id'=> $search_re->id])}}#comments" class="btn-link">
                                                        <i class="fa fa-comments-o text-primary"></i>
                                                        <span>{{$search_re->comments->count()}}</span>
                                                    </a>
                                                </p>
                                            </div>
                                        <!-- Post Meta End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>
                                @endforeach
                            
                        </div>

                        <!-- Pager Start -->
                        <div class="pager--wrapper pb--50">
                            <ul class="pager nav ff--primary">
                                <li><a href="{{$search_res->previousPageUrl()}}"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
                                <li><a href="{{$search_res->nextPageUrl()}}">Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pager End -->
                    </div>

                    <div class="col-md-4 pb--60">
                        @include('frontend.home.wedget')
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->
@endsection