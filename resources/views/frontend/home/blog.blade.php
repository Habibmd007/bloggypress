@extends('frontend.home.master')

@section('body')
@include('frontend.home.banner')

<!-- Blog Section Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row" data-trigger="fitrow">
                    <div class="col-sm-12 col-xs-12 pb--60">
                        <!-- Sticky Post Item Start -->
                        <div class="post--item sticky text-center">
                            <!-- Post Slider Start -->
                            <div class="post--slider owl-carousel" data-owl-nav="true" data-owl-dots="true" data-owl-margin="10">
                                <img src="{{asset('/')}}img/posts-img/post-slider-01.jpg" alt="">
                                <img src="{{asset('/')}}img/posts-img/post-slider-02.jpg" alt="">
                                <img src="{{asset('/')}}img/posts-img/post-slider-03.jpg" alt="">
                            </div>
                            <!-- Post Slider End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Sticky Post Item End -->
                    </div>

                    <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Image Start -->
                            <div class="post--img">
                                <a href="blog-details.html"><img src="{{asset('/')}}img/posts-img/post-img-01.jpg" alt=""></a>
                            </div>
                            <!-- Post Image End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Video Start -->
                            <div class="post--video">
                                <iframe src="https://www.youtube.com/embed/YE7VzlLtp-4?showinfo=0&controls=0&rel=0&wmode=transparent"></iframe>
                            </div>
                            <!-- Post Video End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-12 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Video Start -->
                            <div class="post--video">
                                <iframe src="https://player.vimeo.com/video/154190504?byline=0&portrait=0&title=0"></iframe>
                            </div>
                            <!-- Post Video End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>

                    <div class="col-sm-6 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Audio Start -->
                            <div class="post--audio">
                                <iframe src="https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/34019569&auto_play=false&hide_related=true&show_comments=false&show_reposts=false&visual=true&sharing=false&download=false"></iframe>
                            </div>
                            <!-- Post Audio End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">Travel</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="blog-details.html" class="btn-link">Wherever You Go, Go With All Your Heart</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptate, quibusdam obcaecati, nemo at quas aliquid repellendus odit ducimus dolore quia, voluptates, praesentium repudiandae hic maxime impedit earum! Alias, et!</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="blog-details.html" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>12 June 2017</span>
                                    <a href="#">by John Doe</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>
                </div>

                <!-- Pager Start -->
                <div class="pager--wrapper pb--50">
                    <ul class="pager nav ff--primary">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
                        <li><a href="#">Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
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