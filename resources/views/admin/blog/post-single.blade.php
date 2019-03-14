@extends('admin.master')

@section('body')
    <div class="card">
        <div class="card-body">
            
                <!-- Post Item Start -->
                <div class="post--item post--single text-center">
                            <h3>Media</h3>
                        {!!$single_post->media!!}



                    <!-- Post Slider Start -->
                    <h2>Slider Photos</h2>
                    <a name="" id="" class="btn btn-primary mb-3" href="{{route('add-slider',['post_id' => $single_post->id])}}" role="button"> <i class="fa fa-plus" aria-hidden="true"></i> Add Slider </a>
                    <a name="" id="" class="btn btn-warning mb-3" href="{{route('slider',['id' => $single_post->id])}}" role="button"> <i class="fa fa-edit" aria-hidden="true"></i> Edit Slider </a>

                    <div class="row pt--10">
                        @foreach ($sliders as $slider)
                            
                        <div class="col-sm-3 col-xs-5 pb--30">
                            <p><img src="{{asset($slider->sli_img)}}" alt="" class="center-block " height="100"></p>
                        </div>
                        
                        
                        @endforeach
                        </div>
                    <!-- Post Slider End -->

                    <!-- Post Meta Start -->
                    <div class="post--meta clearfix">
                        <p class="float--left">
                            <i class="fa fa-clock-o text-primary"></i>
                            <span>12 June 2017</span>
                            <a href="author.html">by John Doe</a>
                        </p>

                        <p class="float--right">
                            <i class="fa fa-heart-o text-primary"></i>
                            <span>112</span>
                        </p>

                        <p class="float--right">
                            <a href="#comments" class="btn-link">
                                <i class="fa fa-comments-o text-primary"></i>
                                <span>52</span>
                            </a>
                        </p>
                    </div>
                    <!-- Post Meta End -->

                    <!-- Post Title Start -->
                    <div class="post--title">
                        <h2 class="h2">{{$single_post->head}}</h2>
                    </div>
                    <!-- Post Title End -->
                        
                    <!-- Post Content Start -->
                    <div class="post--content clearfix">
                        <h2>Post short discription</h2>
                        
                        {!!$single_post->post_short!!}
                        <h2>Photo gallery</h2>
                        <a name="" id="" class="btn btn-primary mb-3" href="{{route('add-glphoto',['post_id' => $single_post->id])}}" role="button"> <i class="fa fa-plus" aria-hidden="true"></i> Add Photo </a>
                        <a name="" id="" class="btn btn-warning mb-3" href="{{route('glphoto',['id' => $single_post->id])}}" role="button"> <i class="fa fa-edit" aria-hidden="true"></i> Edit Photo </a>
                        <div class="row pt--10">
                            @foreach ($glphotos as $glphoto)
                            <div class="col-sm-4 col-xs-6 pb--30">
                                <p><img src="{{asset($glphoto->img)}}" alt="" class="center-block" height="100"></p>
                            </div>
                            @endforeach
                        </div>
                        <h2>Photo gallery text</h2>
                            
                        {!!$single_post->photo_gallery_text!!}
                        
                        <h2> Block quote</h2>

                        <blockquote>
                        {{$single_post->qoute}}
                            
                        </blockquote>
                        <h2>Post Details</h2>
                        {!!$single_post->post_details!!}

                    </div>
                    <!-- Post Content End -->
                    <hr>


                    <!-- Post Footer Start -->
                    <div class="post--footer clearfix pt--40">
                        <!-- Post Categories Start -->
                        <ul class="post--cats nav text-primary">
                            <li><strong>Categories:</strong></li>
                            <li><a href="#">lifestyle</a></li>
                            <li><a href="#">travel</a></li>
                            <li><a href="#">journey</a></li>
                            <li><a href="#">hobby</a></li>
                            <li><a href="#">tour</a></li>
                        </ul>
                        <!-- Post Categories End -->

                        <!-- Post Tags Start -->
                        <ul class="post--tags nav float--left">
                            <li><strong>Tags:</strong></li>
                            <li><a href="#">travel</a></li>
                            <li><a href="#">lifestyle</a></li>
                            <li><a href="#">popular post</a></li>
                        </ul>
                        <!-- Post Tags End -->

                        <!-- Post Social Start -->
                        <ul class="post--social nav float--right">
                            <li><strong>Share On:</strong></li>
                            <li>
                                <a href="#" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" title="Share on Google+"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" title="Share on Instagram"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                        <!-- Post Social End -->
                    </div>
                    <!-- Post Footer End -->
                </div>
                <!-- Post Item End -->
            
        </div>
    </div>
@endsection