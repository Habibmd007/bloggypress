<!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">About Me</h2>
                    @php
                        $bio= DB::table('bios')->find(12);
                    @endphp
                    <!-- About Widget Start -->
                    <div class="about--widget pb--3 text-center">
                        <div class="img">
                            <a href="{{route('about-author',['id'=> $bio->id])}}">
                                <img src="{{asset($bio->img)}}" alt="" class="img-circle">
                            </a>
                        </div>

                        <div class="info">
                            <h3 class="name h5 text-primary"><a href="{{route('about-author',['id'=> $bio->id])}}" class="btn-link">{{$bio->name}}</a></h3>

                            <p class="role">{{$bio->desig}}</p>
                        </div>

                        <div class="social">
                            <ul class="nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="bio">
                            <p>{{substr($bio->text, 1, 100)}}</p>
                            
                            <p><a href="{{route('about-author',['id'=> $bio->id])}}">Read More</a></p>
                        </div>
                    </div>
                    <!-- About Widget End -->

                    



                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">My Socials</h2>

                    <!-- Social Widget Start -->
                    <div class="social--widget pb--5 text-center">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Social Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Newsletter</h2>

                    <!-- Newsletter Widget Start -->
                    <div class="newsletter--widget pb--10 text-center">
                        <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="validate">
                            <p class="fs--14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            <input type="email" name="EMAIL" placeholder="Your E-mail" class="form-control" autocomplete="off" required>

                            <button type="submit" class="btn btn-default">Subscribe Now</button>
                        </form>
                    </div>
                    <!-- Newsletter Widget End -->
                </div>
                <!-- Widget End -->











                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Editors Picks</h2>
                    @php
                        $picked= DB::table('blog_posts')
                                    ->join('blog_categories', 'blog_posts.cat_id', '=', 'blog_categories.id')
                                    ->join('users', 'blog_posts.user_id', '=', 'users.id')
                                    ->select('blog_posts.*', 'blog_categories.cat', 'users.name')
                                    ->where('picked', 1)->first();
                    @endphp
                    <!-- Post Widget Start -->
                    <div class="post--widget pb--3 text-center">
                            @if (isset($picked->sli_img))
                                <div class="img">
                                    <a href="blog-details.html"><img src="{{asset($picked->sli_img)}}" alt=""></a>
                                </div>
                            @else
                            <div class="post--video">
                                    {!!$picked->media!!}
                                </div>
                            @endif

                        <div class="cat text-white" data-overlay="0.5" data-overlay-color="primary">
                            <p><a href="#" class="btn-link">{{$picked->cat}}</a></p>
                        </div>

                        <div class="title">
                            <h3 class="h5"><a href="{{route('blog-post',['id'=> $picked->id])}}" class="btn-link">{{$picked->head}}</a></h3>
                        </div>

                        <div class="meta">
                            <p><i class="fa fa-clock-o text-primary"></i>{{$picked->created_at}} <a href="{{route('bio',['id'=> $picked->user_id])}}">{{$picked->name}}</a></p>
                        </div>
                    </div>
                    <!-- Post Widget End -->
                </div>
                <!-- Widget End -->











                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Popular Posts</h2>

                    <!-- Posts Widget Start -->
                    <div class="posts--widget pb--10">
                        <ul class="nav">
                           
                            
                            @foreach ($views as $view)
                                
                            <li class="clearfix">

                                @if (isset($view->slider->sli_img))
                                <div class="img">
                                    <a href="{{route('blog-post',['id'=> $view->id])}}"><img src="{{asset($view->slider->sli_img)}}" alt=""></a>
                                </div>
                                @else
                                <div class="post--video">
                                    {!!$view->media!!}
                                    </div>
                                @endif
                                

                                <div class="info">
                                    <a href="{{route('blog-post',['id'=> $view->id])}}" class="cat" data-overlay="0.5" data-overlay-color="primary">{{$view->category->cat}}</a>

                                    <h3 class="h5"><a href="{{route('blog-post',['id'=> $view->id])}}" class="btn-link">{{substr($view->head, 0,25)}}</a></h3>

                                    <p class="date"><i class="fa fa-clock-o text-primary"></i> <a href="{{route('blog-post',['id'=> $view->id])}}" class="btn-link">{{$view->created_at}}</a></p>
                                </div>
                            </li>

                            @endforeach

                            
                        </ul>
                    </div>
                    <!-- Posts Widget End -->
                </div>
                <!-- Widget End -->









                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Flicker</h2>

                    <!-- Flicker Widget Start -->
                    <div class="flicker--widget" data-trigger="gallery_popup">
                        <div class="row gutter--10">
                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="{{asset('/')}}img/widgets-img/flicker-img-01.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="{{asset('/')}}img/widgets-img/flicker-img-02.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="{{asset('/')}}img/widgets-img/flicker-img-03.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="{{asset('/')}}img/widgets-img/flicker-img-04.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="{{asset('/')}}img/widgets-img/flicker-img-05.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="{{asset('/')}}img/widgets-img/flicker-img-06.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="{{asset('/')}}img/widgets-img/flicker-img-07.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="{{asset('/')}}img/widgets-img/flicker-img-08.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a href="img/widgets-img/flicker-img-full.jpg">
                                    <img src="{{asset('/')}}img/widgets-img/flicker-img-09.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Flicker Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Categories</h2>

                    <!-- Links Widget Start -->
                    @php
                        $cats= DB::table('blog_categories')->get();
                    @endphp
                    <div class="links--widget pb--10">
                        <ul class="nav">
                            @foreach ($cats as $cat)
                                
                            <li>
                                <a href="{{route('post-bycat',['id'=> $cat->id])}}">
                                    <span class="text">{{$cat->cat}}</span>
                                    <span class="count">
                                        {{$count= DB::table('blog_posts')->where('cat_id', $cat->id)->count()}}
                                    </span>
                                </a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <!-- Links Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <h2 class="h4 widget--title">Archives</h2>

                    <!-- Links Widget Start -->
                    <div class="links--widget">
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <span class="text">March 2017</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">February 2017</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text">January 2017</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Links Widget End -->
                </div>
                <!-- Widget End -->

                <!-- Widget Start -->
                <div class="widget">
                    <!-- Ad Widget Start -->
                    <div class="ad--widget pb--10">
                        <a href="#" target="_blank">
                            <img src="{{asset('/')}}img/widgets-img/ad-widget.jpg" alt="">
                        </a>
                    </div>
                    <!-- Ad Widget End -->
                </div>
                <!-- Widget End -->