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
                        {!!$blogpost->media!!}
                    <!-- Post Slider Start -->
                    <div class="post--slider owl-carousel" data-owl-nav="true" data-owl-dots="true" data-owl-margin="10">
                        @foreach ($sliders as $slider)
                        <img src="{{asset($slider->sli_img)}}" alt="">
                        @endforeach
                    </div>
                    <!-- Post Slider End -->

                    <!-- Post Meta Start -->
                    <div class="post--meta clearfix">
                        <p class="float--left">
                            <i class="fa fa-clock-o text-primary"></i>
                            <span>{{$blogpost->created_at}}</span>
                            <a href="{{route('author',['id'=> $blogpost->user->id])}}">{{$blogpost->user->name}}</a>
                        </p>

                        <p class="float--right">
                            <i class="fa fa-heart-o text-primary"></i>
                            <span>112</span>
                        </p>

                        {{-- comment and reply count --}}
                       
                            @php
                                $replies= DB::table('replies')->where('blogpost_id', $blogpost->id )->get();
                                $ttlrep= count($replies)
                            @endphp
                         
                        <p class="float--right">
                            <a href="#comments" class="btn-link">
                                <i class="fa fa-comments-o text-primary"></i>
                                <span>{{$blogpost->comments->count() + $ttlrep}}</span>
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
                      @if (isset($blogpost->qoute))
                          
                      <blockquote>
                          {!!$blogpost->qoute!!}
                      </blockquote>
                      @endif
                        
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
                                
                            <li><a href="{{route('post-bycat',['id'=> $cat->id])}}">{{$cat->cat}}</a></li>
                            @endforeach

                        </ul>
                        <!-- Post Categories End -->

                        <!-- Post Tags Start -->
                            <ul class="post--tags nav float--left">
                            <li><strong>Tags:</strong></li>
                            @foreach ($blogpost->blogpostag as $blogpostag)
                            <?php $tag= DB::table('tags')->find($blogpostag->tag_id); ?>
                            <li><a href="#">{{$tag->slug}}</a></li>
                            @endforeach
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






               
                {{-- -------------------- --}}
                <!-- Post Author Start -->
                <div class="post--author clearfix pt--50">
                    <div class="img float--left">
                        <img src="{{asset($blogpost->user->bio->img)}}" alt="" class="img-circle">
                    </div>

                    <div class="info ov--h">
                        <div class="header clearfix">
                            <h2 class="name h6">{{$blogpost->user->name}}</h2>

                            <p class="role float--left">{{$blogpost->user->bio->desig}}</p>

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
                            <p>{{$blogpost->user->bio->text}}</p>
                        </div>

                        <div class="action">
                            <a href="{{route('bio',['id'=> $blogpost->user->id])}}">View all posts by {{ $blogpost->user->name}}</a>
                        </div>
                    </div>
                </div>
                <!-- Post Author End -->
                {{-- -------------------- --}}

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
                                    <a href="{{route('blog-post',['id'=> $bp_youlike->id])}}">
                                        @if (isset( $bp_youlike->slider->sli_img))
                                        <img src="{{asset($bp_youlike->slider->sli_img)}}" alt="">
                                        @else
                                        <div class="post--video">
                                            {!!$bp_youlike->media!!}
                                        </div>
                                        @endif
                                    </a>
                                </div>
                                <!-- Post Image End -->

                                <!-- Post Title Start -->
                                <div class="post--title text-center">
                                    <h3 class="h5"><a href="{{route('blog-post',['id'=> $bp_youlike->id])}}" class="btn-link">{{$bp_youlike->head}}</a></h3>
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
               @include('frontend.comment.comment')
                <!-- Post Comment Form End -->
            </div>

            <div class="col-md-4 pb--60">
              @include('frontend.home.wedget')
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->


{{-- comment edit modal --}}
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection