@extends('frontend.home.master')

@section('body')
<!-- Blog Section Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pb--60">
               
                

                <!-- Post Item Start -->
                @foreach ($blogposts as $blogpost)

                @php
                    $sliders= DB::table('sliders')->where('blogpost_id', $blogpost->id)->where('status', 1)->get();
                    $glposts= DB::table('blog_post_galleries')->where('blogpost_id', $blogpost->id)->where('status', 1)->get();
                    $cats= DB::table('blog_categories')->get();
                @endphp
                    
                <div class="post--item post--single text-center">
                    <!-- Post Slider Start -->
                    <div class="post--slider owl-carousel" data-owl-nav="true" data-owl-dots="true" data-owl-margin="10">
                        @foreach ($sliders as $slider)
                        <img src="{{$slider->sli_img}}" alt="">
                        @endforeach
                    </div>
                    <!-- Post Slider End -->

                    <!-- Post Meta Start -->
                    <div class="post--meta clearfix">
                        <p class="float--left">
                            <i class="fa fa-clock-o text-primary"></i>
                            <span>{{$blogpost->created_at}}</span>
                            <a href="author.html">{{$blogpost->user->name}}</a>
                        </p>

                        <p class="float--right">
                            <i class="fa fa-heart-o text-primary"></i>
                            <span>112</span>
                        </p>

                        <p class="float--right">
                            <a href="#comments" class="btn-link">
                                <i class="fa fa-comments-o text-primary"></i>
                                <span>{{$blogpost->comments->count()}}</span>
                            </a>
                        </p>
                    </div>
                    <!-- Post Meta End -->

                    <!-- Post Title Start -->
                    <div class="post--title">
                        <h2 class="h2">{{$blogpost->head}}</h2>
                    </div>
                    <!-- Post Title End -->

                    <!-- Post Content Start -->
                    <div class="post--content clearfix">
                      {!!$blogpost->post_short!!}

                        <div class="row pt--10">
                            @foreach ($glposts as $glpost)
                                
                            <div class="col-sm-4 col-xs-6 pb--30">
                                <p><img src="{{$glpost->img}}" alt="" class="center-block" height="100"></p>
                            </div>
                            @endforeach
                        </div>
                      {!!$blogpost->photo_gallery_text!!}
                      
                      <blockquote>
                          {!!$blogpost->photo_gallery_text!!}
                        </blockquote>
                        
                        {!!$blogpost->post_details!!}
                    </div>
                    <!-- Post Content End -->
                    <hr>


                    <!-- Post Footer Start -->
                    <div class="post--footer clearfix pt--40">
                        <!-- Post Categories Start -->
                        <ul class="post--cats nav text-primary">
                            <li><strong>Categories:</strong></li>
                            @foreach ($cats as $cat)
                                
                            <li><a href="#">{{$cat->cat}}</a></li>
                            @endforeach

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
                                <a class="fb-share-button" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fbloggypress%2Fpublic%2Fblogpages%3Fpage%3D1&amp;src=sdkpreparse" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
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
                @endforeach

                <!-- Post Item End -->









                <!-- Pager Start -->
                <div class="pager--wrapper pt--50">
                    <ul class="pager nav ff--primary">
                        <li><a href="{{$blogposts->previousPageUrl()}}"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
                        <li><a href="{{$blogposts->nextPageUrl()}}">Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>
                <!-- Pager End -->

                <!-- Post Author Start -->
                <div class="post--author clearfix pt--50">
                    <div class="img float--left">
                        <img src="img/blog-img/post-author.jpg" alt="" class="img-circle">
                    </div>

                    <div class="info ov--h">
                        <div class="header clearfix">
                            <h2 class="name h6"><a href="author.html" class="btn-link">Karen Rosalie</a></h2>

                            <p class="role float--left">Photographer &amp; Blogger</p>

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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, suscipit. Mollitia placeat, delectus autem aliquid eius assumenda quibusdam accusamus ad illo soluta labore quam, sunt dolor nisi voluptate provident harum!</p>
                        </div>

                        <div class="action">
                            <a href="author.html">View all posts by Dylan Reyes</a>
                        </div>
                    </div>
                </div>
                <!-- Post Author End -->

                <!-- Related Posts Start -->
                <div class="related--posts pt--50">
                    <div class="related--posts-title text-uppercase text-center">
                        <h2 class="h5">You may also like</h2>
                    </div>

                    <div class="row">
                        
                        @foreach ($bp_youlikes as $bp_youlike)
                            
                        <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                            <!-- Post Item Start -->
                            <div class="post--item">
                                <!-- Post Image Start -->
                                <div class="post--img">
                                    <a href="#"><img src="{{asset($bp_youlike->slider->sli_img)}}" alt=""></a>
                                </div>
                                <!-- Post Image End -->

                                <!-- Post Title Start -->
                                <div class="post--title text-center">
                                    <h3 class="h5"><a href="#" class="btn-link">{{$bp_youlike->head}}</a></h3>
                                </div>
                                <!-- Post Title End -->
                            </div>
                            <!-- Post Item End -->
                        </div>
                        @endforeach




                    </div>
                </div>
                <!-- Related Posts End -->

                <!-- Post Comments Start -->
                <div id="comments" class="post--comments pt--40">
                    <div class="post--comments-title text-uppercase text-center">
                        <h2 class="h5">03 Comments</h2>
                    </div>

                    <!-- Comment Items Start -->
                    <ul class="comment--items">


                        @foreach ($blogpost->comments as $comment)
                            
                        <li>
                            <!-- Comment Item Start -->
                            <div class="comment--item clearfix">
                                <div class="comment--img float--left">
                                    <img src="{{asset($comment->user->image)}}" alt="" class="img-circle">
                                </div>

                                <div class="comment--info ov--h">
                                <form action="{{route('reply')}}" method="post">
                                    @csrf
                                    <div class="comment--header clearfix">
                                        <button type="submit" class="reply btn-link float--right">Reply</button>

                                        <h3 class="name h5">{{$comment->user->name}}</h3>

                                        <p class="date">{{$comment->created_at}}</p>
                                    </div>

                                    <div class="comment--content">
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                    <div class="comment--content form-group">
                                        <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        <textarea name="reply" placeholder="Your Reply" class="form-control" required></textarea>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Comment Item End -->




                            <!-- Reply Items Start -->
                            <ul class="comment--items">
                                @foreach ($comment->reply as $reply)
                                <li>
                                    <!-- Comment Item Start -->
                                    <div class="comment--item clearfix">
                                        <div class="comment--img float--left">
                                            <img src="{{$reply->user->image}}" alt="" class="img-circle">
                                        </div>

                                        <div class="comment--info ov--h">
                                            <div class="comment--header clearfix">
                                                <a href="#" class="reply btn-link float--right">Reply</a>

                                                <h3 class="name h5">{{$reply->user->name}}</h3>

                                                <p class="date">{{$reply->created_at}}</p>
                                            </div>
                                                
                                            <div class="comment--content">
                                                <p>{{$reply->reply}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Item End -->
                                </li>
                                @endforeach
                            </ul>
                            <!-- Comment Items End -->
                        </li>
                        @endforeach

                        
                        
                        
                        
                        
                        
                        
                        {{--  <li>
                            <!-- Comment Item Start -->
                            <div class="comment--item clearfix">
                                <div class="comment--img float--left">
                                    <img src="img/blog-img/comment-avatar-03.jpg" alt="" class="img-circle">
                                </div>

                                <div class="comment--info ov--h">
                                    <div class="comment--header clearfix">
                                        <a href="#" class="reply btn-link float--right">Reply</a>

                                        <h3 class="name h5">Roy Morris</h3>

                                        <p class="date">June 17, 2017 at 9:00 am</p>
                                    </div>

                                    <div class="comment--content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nemo minus non sunt corporis modi vitae perferendis beatae.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Item End -->
                        </li>  --}}
                    </ul>
                    <!-- Comment Items End -->
                </div>
                <!-- Post Comments End -->

                <!-- Post Comment Form Start -->
                <div class="post--comment-form pt--40">
                    <!-- Comment Respond Start -->
                    <div class="comment--respond">
                        <div class="comment--respond-title text-uppercase text-center">
                            <h2 class="h5">Leave Comments</h2>
                        </div>
                       @if (Auth::check() && Auth::user()->role->id == 2)
                           
                       <form action="{{route('insert-comment')}}" method="POST" data-form="validate">
                           @csrf
                           <div class="form-group">
                               <textarea name="comment" placeholder="Your Comment" class="form-control" required></textarea>
                           </div>
                           <div class="form-group">
                                <input type="hidden" name="blog_post_id" id="" value="{{$blogpost->id}}">
                                <input type="hidden" name="user_id" id="" value="{{Auth::user()->id}}">
                            </div>

                        
                         


                           <button type="submit" class="btn btn-default">Post Comment</button>
                        </form>
                        @else
                        <a href="{{route('login')}}" class="btn btn-default">Log-in to Comment</a>
                           
                       @endif
                    </div>
                    <!-- Comment Respond End -->
                </div>
                <!-- Post Comment Form End -->
            </div>

            <div class="col-md-4 pb--60">
              @include('frontend.home.wedget')
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection