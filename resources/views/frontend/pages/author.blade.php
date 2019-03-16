@extends('frontend.home.master')

@section('body')
<!-- Blog Section Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <!-- Post Author Start -->
                        <div class="post--author clearfix pb--60">
                            <div class="img float--left">
                                <img src="{{asset($bio->img)}}" alt="" class="img-circle">
                            </div>

                            <div class="info ov--h">
                                <div class="header clearfix">
                                    <h2 class="name h6">{{$bio->name}}</h2>

                                    <p class="role float--left">{{$bio->desig}}</p>

                                    <div class="social float--right">
                                        <ul class="nav">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="bio">
                                    <p>{{substr($bio->text, 0, 150)}}</p>
                                </div>

                                <div class="action">
                                    <a href="{{route('about-author',['id'=> $bio->id])}}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Post Author End -->

                        <div class="row" data-trigger="masonry">



                                @foreach ($author_posts as $all_post)
                        

                                <div class="col-sm-6 col-xs-12 pb--60">
                                    <!-- Post Item Start -->
                                    <div class="post--item text-center">
                                        <!-- Post Image Start -->
                                        @if (isset($all_post->slider->sli_img))
                                        <div class="post--img">
                                            <a href="{{route('blog-post',['id'=> $all_post->id])}}"><img src="{{asset($all_post->slider->sli_img)}}" alt=""></a>
                                        </div>
                                        @else
                                        <div class="post--video">
                                            {!!$all_post->media!!}
                                        </div>
                                        @endif
            
                                        <!-- Post Image End -->
            
                                        <!-- Post Category Start -->
                                        <div class="post--cat">
                                            <a href="{{route('post-bycat',['id'=> $all_post->category->id])}}" data-overlay="0.5" data-overlay-color="primary">{{$all_post->category->cat}}</a>
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
                                                    <a href="{{route('about-author',['id'=> $all_post->user->bio->id])}}">{{$all_post->user->name}}</a>
                                                </p>
                
                                                <p class="float--right">
                                                    <i class="fa fa-heart-o text-primary"></i>
                                                    <span>{{$all_post->comments->count()}}</span>
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
                                <li><a href="{{$author_posts->previousPageUrl()}}"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
                                <li><a href="{{$author_posts->nextPageUrl()}}">Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
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