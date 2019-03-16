@extends('frontend.home.master')

@section('body')
@include('frontend.home.banner')

<!-- Blog Section Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row" data-trigger="fitrow">

                    {{-- ===========1st start========================== --}}
                    <div class="col-sm-12 col-xs-12 pb--60">
                        <!-- Sticky Post Item Start -->
                        <div class="post--item sticky text-center">
                            <!-- Post Slider Start -->

                            @if (isset( $home_1st->slider->sli_img))

                            <div class="post--slider owl-carousel" data-owl-nav="true" data-owl-dots="true" data-owl-margin="10">
                                <img src="{{asset($home_1st->slider->sli_img)}}" alt="">
                            </div>
                             <!-- Post Slider End -->

                            @else
                                <div class="post--video">
                                    {!!$home_1st->media!!}
                                </div>
                                
                            @endif


                            

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">{{$home_1st->category->cat}}</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="{{route('blog-post',['id'=> $home_1st->id])}}" class="btn-link">{{$home_1st->head}}</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                {{substr($home_1st->post_short,3,150)}}
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="{{route('blog-post',['id'=> $home_1st->id])}}" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>{{$home_1st->created_at}}</span>
                                    <a href="{{route('about',['id'=> $home_1st->user->bio->id])}}">{{$home_1st->user->name}}</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>{{$home_1st->comments->count()}}</span>
                                </p>

                                <p class="float--right">
                                    <a href="{{route('blog-post',['id'=> $home_1st->id])}}#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>{{$home_1st->comments->count()}}</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Sticky Post Item End -->
                    </div>
                    {{-- ===========1st end========================== --}}






                    {{-- ===========2nd start========================== --}}
                    @foreach ($home_2nds as $home_2nd)
                        

                    <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Image Start -->
                            @if (isset($home_2nd->slider->sli_img))
                            <div class="post--img">
                                <a href="blog-details.html"><img src="{{asset($home_2nd->slider->sli_img)}}" alt=""></a>
                            </div>
                            @else
                            <div class="post--video">
                                {!!$home_2nd->media!!}
                            </div>
                            @endif

                            <!-- Post Image End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="" data-overlay="0.5" data-overlay-color="primary">{{$home_2nd->category->cat}}</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="{{route('blog-post',['id'=> $home_2nd->id])}}" class="btn-link">{{$home_2nd->head}}</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                    {{substr($home_2nd->post_short,3,150)}}
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="{{route('blog-post',['id'=> $home_2nd->id])}}" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                    <p class="float--left">
                                        <i class="fa fa-clock-o text-primary"></i>
                                        <span>{{$home_2nd->created_at}}</span>
                                        <a href="{{route('about',['id'=> $home_2nd->user->bio->id])}}">{{$home_2nd->user->name}}</a>
                                    </p>
    
                                    <p class="float--right">
                                        <i class="fa fa-heart-o text-primary"></i>
                                        <span>{{$home_2nd->comments->count()}}</span>
                                    </p>
    
                                    <p class="float--right">
                                        <a href="{{route('blog-post',['id'=> $home_2nd->id])}}#comments" class="btn-link">
                                            <i class="fa fa-comments-o text-primary"></i>
                                            <span>{{$home_2nd->comments->count()}}</span>
                                        </a>
                                    </p>
                                </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>
                    @endforeach












                    
                    {{-- ========================== 3rd ================================= --}}

                   
                    <div class="col-sm-12 col-xs-12 pb--60">
                            <!-- Sticky Post Item Start -->
                            <div class="post--item text-center">
                                <!-- Post Slider Start -->
    
                                @if (isset( $home_3rds->slider->sli_img))
    
                                <div class="post--slider owl-carousel" data-owl-nav="true" data-owl-dots="true" data-owl-margin="10">
                                    <img src="{{asset($home_3rds->slider->sli_img)}}" alt="">
                                </div>
                                 <!-- Post Slider End -->
    
                                @else
                                    <div class="post--video">
                                        {!!$home_3rds->media!!}
                                    </div>
                                @endif
                                <!-- Post Category Start -->
                                <div class="post--cat">
                                    <a href="#" data-overlay="0.5" data-overlay-color="primary">{{$home_3rds->category->cat}}</a>
                                </div>
                                <!-- Post Category End -->
    
                                <!-- Post Title Start -->
                                <div class="post--title">
                                    <h2 class="h3"><a href="{{route('blog-post',['id'=> $home_3rds->id])}}" class="btn-link">{{$home_3rds->head}}</a></h2>
                                </div>
                                <!-- Post Title End -->
    
                                <!-- Post Excerpt Start -->
                                <div class="post--excerpt">
                                    {{substr($home_3rds->post_short,3,150)}}
                                </div>
                                <!-- Post Excerpt End -->
    
                                <!-- Post Action Start -->
                                <div class="post--action">
                                    <a href="{{route('blog-post',['id'=> $home_3rds->id])}}" class="btn btn-default">Read More</a>
                                </div>
                                <!-- Post Action End -->
    
                                <!-- Post Meta Start -->
                                <div class="post--meta clearfix">
                                    <p class="float--left">
                                        <i class="fa fa-clock-o text-primary"></i>
                                        <span>{{$home_3rds->created_at}}</span>
                                        <a href="{{route('about',['id'=> $home_3rds->user->bio->id])}}">{{$home_3rds->user->name}}</a>
                                    </p>
    
                                    <p class="float--right">
                                        <i class="fa fa-heart-o text-primary"></i>
                                        <span>{{$home_3rds->comments->count()}}</span>
                                    </p>
    
                                    <p class="float--right">
                                        <a href="{{route('blog-post',['id'=> $home_3rds->id])}}#comments" class="btn-link">
                                            <i class="fa fa-comments-o text-primary"></i>
                                            <span>{{$home_3rds->comments->count()}}</span>
                                        </a>
                                    </p>
                                </div>
                                <!-- Post Meta End -->
                            </div>
                            <!-- Sticky Post Item End -->
                        </div>

                    {{-- ===========================3rd end ================================ --}}
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    {{-- ===========================4th start ================================ --}}
                    @foreach ($home_4ths as $home_4th)
                        

                    <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Image Start -->
                            @if (isset($home_4th->slider->sli_img))
                            <div class="post--img">
                                <a href="blog-details.html"><img src="{{asset($home_4th->slider->sli_img)}}" alt=""></a>
                            </div>
                            @else
                            <div class="post--video">
                                {!!$home_4th->media!!}
                            </div>
                            @endif

                            <!-- Post Image End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="" data-overlay="0.5" data-overlay-color="primary">{{$home_4th->category->cat}}</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="{{route('blog-post',['id'=> $home_4th->id])}}" class="btn-link">{{$home_4th->head}}</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                    {{substr($home_4th->post_short,3,150)}}
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="{{route('blog-post',['id'=> $home_4th->id])}}" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                    <p class="float--left">
                                        <i class="fa fa-clock-o text-primary"></i>
                                        <span>{{$home_4th->created_at}}</span>
                                        <a href="{{route('about',['id'=> $home_4th->user->bio->id])}}">{{$home_4th->user->name}}</a>
                                    </p>
    
                                    <p class="float--right">
                                        <i class="fa fa-heart-o text-primary"></i>
                                        <span>{{$home_4th->comments->count()}}</span>
                                    </p>
    
                                    <p class="float--right">
                                        <a href="{{route('blog-post',['id'=> $home_4th->id])}}#comments" class="btn-link">
                                            <i class="fa fa-comments-o text-primary"></i>
                                            <span>{{$home_4th->comments->count()}}</span>
                                        </a>
                                    </p>
                                </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>
                    @endforeach

                   {{-- ------------------- --}}
                </div>

                <!-- Pager Start -->
                <div class="pager--wrapper pb--50">
                    <ul class="pager nav ff--primary">
                        <li><a href="{{route('blogpost-old')}}"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
                        <li><a href="{{route('blogpost-new')}}">Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
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