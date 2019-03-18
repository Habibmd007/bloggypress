@extends('frontend.home.master')

@section('body')
<!-- Blog Section Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        

                        <div class="row" data-trigger="masonry">



                                @foreach ($all_posts as $all_post)
                        

                                <div class="col-sm-6 col-xs-12 pb--60">
                                    <!-- Post Item Start -->
                                    <div class="post--item text-center">
                                        <!-- Post Image Start -->
                                        @if (isset($all_post->slider->sli_img))
                                        <div class="post--img">
                                            <a href="blog-details.html"><img src="{{asset($all_post->slider->sli_img)}}" alt=""></a>
                                        </div>
                                        @else
                                        <div class="post--video">
                                            {!!$all_post->media!!}
                                        </div>
                                        @endif
            
                                        <!-- Post Image End -->
            
                                        <!-- Post Category Start -->
                                        <div class="post--cat">
                                            <a href="" data-overlay="0.5" data-overlay-color="primary">{{$all_post->category->cat}}</a>
                                        </div>
                                        <!-- Post Category End -->
            
                                        <!-- Post Title Start -->
                                        <div class="post--title">
                                            <h2 class="h3"><a href="{{route('blog-post',['id'=> $all_post->id])}}" class="btn-link">{{$all_post->head}}</a></h2>
                                        </div>
                                        <!-- Post Title End -->
            
                                        <!-- Post Excerpt Start -->
                                        <div class="post--excerpt">
                                                {{substr($all_post->post_short,3,150)}}
                                        </div>
                                        <!-- Post Excerpt End -->
            
                                        <!-- Post Action Start -->
                                        <div class="post--action">
                                            <a href="{{route('blog-post',['id'=> $all_post->id])}}" class="btn btn-default">Read More</a>
                                        </div>
                                        <!-- Post Action End -->
            
                                        <!-- Post Meta Start -->
                                        <div class="post--meta clearfix">
                                                <p class="float--left">
                                                    <i class="fa fa-clock-o text-primary"></i>
                                                    <span>{{$all_post->created_at}}</span>
                                                    <a href="{{route('author',['id'=> $all_post->user->id])}}">{{$all_post->user->name}}</a>
                                                </p>
                
                                                <p class="float--right">
                                                        <a href="{{route('like', ['id' => $all_post->id])}}">
                                                            <i class="fa fa-heart-o text-primary"></i>
                                                            @php
                                                                $likes= DB::table('likes')->where('post_id', $all_post->id)->count();
                                                            @endphp
                                                            <span>{{$likes}}</span>
                                                        </a>
                                                </p>
                
                                                <p class="float--right">
                                                    <a href="{{route('blog-post',['id'=> $all_post->id])}}#comments" class="btn-link">
                                                        <i class="fa fa-comments-o text-primary"></i>
                                                        <span>{{$all_post->comments->count()}}</span>
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
                                <li><a href="{{$all_posts->previousPageUrl()}}"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
                                <li><a href="{{$all_posts->nextPageUrl()}}">Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
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