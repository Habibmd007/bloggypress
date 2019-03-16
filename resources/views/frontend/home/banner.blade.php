<!-- Banner Section Start -->
<section class="banner--section">
    <div class="container">
        <div class="row">

            
            <div class="col-md-6 pb--60" data-mh="banner02">
                <!-- Banner Item Start -->
                
                
                
                @if (isset($featured->slider->sli_img))
                    
                <div class="banner--item style--2" data-bg-img="{{$featured->slider->sli_img}}" data-overlay="0.5">
                    <!-- Banner Content Start -->
                    <div class="banner--content p--60-30 text-white text-center">
                        <div class="tag" data-overlay="0.5" data-overlay-color="primary">
                            <p><a href="{{route('blog-post',['id'=> $featured->id])}}" class="btn-link">{{$featured->category->cat}}</a></p>
                        </div>

                        <div class="title">
                            <h2 class="h2 text-white"><a href="{{route('blog-post',['id'=> $featured->id])}}" class="btn-link">{{$featured->head}}</a></h2>
                        </div>

                        <div class="desc">
                            
                            <p>{{substr($featured->post_short,3,150)}}</p>
                        </div>

                        <div class="action">
                            <a href="{{route('blog-post',['id'=> $featured->id])}}" class="btn btn-white">Read More</a>
                        </div>
                    </div>
                    <!-- Banner Content End -->
                </div>
                <!-- Banner Item End -->
                @elseif(isset( $featured->media))
                <div class="post--item text-center">
                        <!-- Post Slider Start -->

                       
                            <div class="post--video">
                                {!!$featured->media!!}
                            </div>
                            
                        <!-- Post Category Start -->
                        <div>
                        <div class="post--cat">
                            <a href="#" data-overlay="0.5" data-overlay-color="primary">{{$featured->category->cat}}</a>
                        </div>
                        <!-- Post Category End -->

                        <!-- Post Title Start -->
                        <div class="post--title">
                            <h2 class="h3"><a href="{{route('blog-post',['id'=> $featured->id])}}" class="btn-link">{{$featured->head}}</a></h2>
                        </div>
                        <!-- Post Title End -->

                        <!-- Post Excerpt Start -->
                        <div class="post--excerpt">
                            {{substr($featured->post_short,3,150)}}
                        </div>
                        <!-- Post Excerpt End -->

                        <!-- Post Action Start -->
                        <div class="post--action">
                            <a href="{{route('blog-post',['id'=> $featured->id])}}" class="btn btn-default">Read More</a>
                        </div>
                        <!-- Post Action End -->

                        <!-- Post Meta Start -->
                        <div class="post--meta clearfix">
                            <p class="float--left">
                                <i class="fa fa-clock-o text-primary"></i>
                                <span>{{$featured->created_at}}</span>
                                <a href="{{route('bio',['id'=> $featured->user->id])}}">{{$featured->user->name}}</a>
                            </p>

                            <p class="float--right">
                                <i class="fa fa-heart-o text-primary"></i>
                                <span>{{$featured->comments->count()}}</span>
                            </p>

                            <p class="float--right">
                                <a href="{{route('blog-post',['id'=> $featured->id])}}#comments" class="btn-link">
                                    <i class="fa fa-comments-o text-primary"></i>
                                    <span>{{$featured->comments->count()}}</span>
                                </a>
                            </p>
                        </div>
                    </div><!--position-->
                        <!-- Post Meta End -->
                    </div>
                @else
                        
                @endif
               
            </div>
                   









            <div class="col-md-6 pb--30" data-mh="banner02">
                <div class="row">
                    @foreach ($cats as $cat)
                    <div class="col-xs-6 col-xxs-12">
                        <!-- Category Item Start -->
                        <div class="category--item">
                            <a href="{{route('post-bycat',['id'=> $cat->id])}}" data-overlay="0.7" data-overlay-color="primary">
                                <img src="{{asset($cat->img)}}" alt="">
                                <span>{{$cat->cat}}</span>
                            </a>
                        </div>
                        <!-- Category Item End -->
                    </div>
                    @endforeach


                   


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->