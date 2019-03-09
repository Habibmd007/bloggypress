@extends('frontend.home.master')

@section('body')
<!-- Blog Section Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pb--60">


                <!-- Post Item Start -->
                <div class="post--item post--single text-center">
                    <!-- Post Slider Start -->
                    <div class="post--slider owl-carousel" data-owl-nav="true" data-owl-dots="true" data-owl-margin="10">
                        @foreach ($sliders as $slider)
                            <img src="{{$slider->img}}" alt="">
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
                        <h2 class="h2">Wherever You Go, Go With All Your Heart</h2>
                    </div>
                    <!-- Post Title End -->

                    <!-- Post Content Start -->
                    <div class="post--content clearfix">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>

                        <p>It is a long established fact that a reader will be distracted by <a href="#">the readable content</a> of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                        <div class="row pt--10">
                            <div class="col-sm-4 col-xs-6 pb--30">
                                <p><img src="img/blog-img/post-detail-01.jpg" alt="" class="center-block"></p>
                            </div>

                            <div class="col-sm-4 col-xs-6 pb--30">
                                <p><img src="img/blog-img/post-detail-02.jpg" alt="" class="center-block"></p>
                            </div>

                            <div class="col-sm-4 col-xs-6 pb--30">
                                <p><img src="img/blog-img/post-detail-03.jpg" alt="" class="center-block"></p>
                            </div>

                            <div class="col-sm-4 col-xs-6 pb--30">
                                <p><img src="img/blog-img/post-detail-04.jpg" alt="" class="center-block"></p>
                            </div>

                            <div class="col-sm-4 col-xs-6 pb--30">
                                <p><img src="img/blog-img/post-detail-05.jpg" alt="" class="center-block"></p>
                            </div>

                            <div class="col-sm-4 col-xs-6 pb--30">
                                <p><img src="img/blog-img/post-detail-06.jpg" alt="" class="center-block"></p>
                            </div>
                        </div>

                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>

                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit necessitatibus vitae voluptatibus autem assumenda quidem quos rerum, praesentium. Veniam quis eos adipisci nam consequuntur quia eius soluta cumque, officiis modi!</p>
                        </blockquote>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore molestias fuga nobis dolore quisquam deleniti ipsam magni deserunt, soluta natus vero maiores laboriosam ut hic placeat, consequuntur laudantium harum dicta? Inventore, earum, natus! Iure aut mollitia odit animi, harum, aliquam deserunt ducimus provident dolorem qui possimus eos voluptatem! Voluptate id ratione nam beatae sequi maiores itaque consequatur quas architecto blanditiis!</p>

                        <p><img src="img/blog-img/post-detail-07.jpg" alt="" class="alignright"></p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem reprehenderit commodi excepturi, dolor alias nam, incidunt ad quae facere assumenda dolorum laborum temporibus, debitis praesentium aliquid nemo cum iure qui.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed provident adipisci alias id omnis nesciunt, illum veniam est consectetur quod, odio quam nulla ipsa beatae consequuntur illo. Beatae, dolor, libero? Amet ut, accusantium assumenda laboriosam distinctio eum laborum, quod. Dolorem quidem, obcaecati labore laboriosam asperiores necessitatibus quisquam, repellendus maxime enim at perferendis ea illo omnis iusto ut consectetur possimus totam. Est unde, commodi enim aspernatur, cupiditate laboriosam vitae voluptatibus vel saepe modi molestiae ad, iste, quae aliquid. Blanditiis nobis nam atque aspernatur illo expedita impedit ab veniam, consequatur, ipsa unde. Officiis quas reiciendis ex perspiciatis quo architecto ab voluptatem facilis consectetur ullam, aperiam fuga saepe provident autem voluptas suscipit, sunt. Error possimus officia ab ut similique fugiat, laudantium est, ratione!</p>

                        <p><img src="img/blog-img/post-detail-08.jpg" alt="" class="alignleft"></p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem laudantium sed dolores iusto nisi. Repellendus deserunt quos nobis quam, unde provident similique eveniet fugiat fugit numquam aspernatur, corrupti nulla facere.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ad ipsa, nihil quos eum nostrum! Dicta sunt commodi quis optio necessitatibus! Beatae dignissimos placeat error nulla quia sapiente asperiores delectus. Cum laborum voluptate labore laboriosam nihil. Maiores voluptatem incidunt molestiae eius praesentium velit similique quis temporibus expedita consectetur dolore, optio facilis accusantium reprehenderit cum dignissimos molestias quam eum, ullam. Pariatur.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis ducimus quos suscipit repellat explicabo a minima eius at aperiam neque, ipsam officiis! Eligendi eum repellat laboriosam, delectus doloremque hic fugiat.</p>
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









                <!-- Pager Start -->
                <div class="pager--wrapper pt--50">
                    <ul class="pager nav ff--primary">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
                        <li><a href="#">Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
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
                        <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                            <!-- Post Item Start -->
                            <div class="post--item">
                                <!-- Post Image Start -->
                                <div class="post--img">
                                    <a href="#"><img src="img/posts-img/post-slider-01.jpg" alt=""></a>
                                </div>
                                <!-- Post Image End -->

                                <!-- Post Title Start -->
                                <div class="post--title text-center">
                                    <h3 class="h5"><a href="#" class="btn-link">Love Is Everything</a></h3>
                                </div>
                                <!-- Post Title End -->
                            </div>
                            <!-- Post Item End -->
                        </div>

                        <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                            <!-- Post Item Start -->
                            <div class="post--item">
                                <!-- Post Image Start -->
                                <div class="post--img">
                                    <a href="#"><img src="img/posts-img/post-slider-02.jpg" alt=""></a>
                                </div>
                                <!-- Post Image End -->

                                <!-- Post Title Start -->
                                <div class="post--title text-center">
                                    <h3 class="h5"><a href="#" class="btn-link">Interview with Paris Girl on Monmartre</a></h3>
                                </div>
                                <!-- Post Title End -->
                            </div>
                            <!-- Post Item End -->
                        </div>

                        <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                            <!-- Post Item Start -->
                            <div class="post--item">
                                <!-- Post Image Start -->
                                <div class="post--img">
                                    <a href="#"><img src="img/posts-img/post-slider-03.jpg" alt=""></a>
                                </div>
                                <!-- Post Image End -->

                                <!-- Post Title Start -->
                                <div class="post--title text-center">
                                    <h3 class="h5"><a href="#" class="btn-link">Girl Love Music At Home</a></h3>
                                </div>
                                <!-- Post Title End -->
                            </div>
                            <!-- Post Item End -->
                        </div>
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
                        <li>
                            <!-- Comment Item Start -->
                            <div class="comment--item clearfix">
                                <div class="comment--img float--left">
                                    <img src="img/blog-img/comment-avatar-01.jpg" alt="" class="img-circle">
                                </div>

                                <div class="comment--info ov--h">
                                    <div class="comment--header clearfix">
                                        <a href="#" class="reply btn-link float--right">Reply</a>

                                        <h3 class="name h5">Jesmin Martin</h3>

                                        <p class="date">June 17, 2017 at 9:00 am</p>
                                    </div>

                                    <div class="comment--content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nemo minus non sunt corporis modi vitae perferendis beatae.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Item End -->

                            <!-- Comment Items Start -->
                            <ul class="comment--items">
                                <li>
                                    <!-- Comment Item Start -->
                                    <div class="comment--item clearfix">
                                        <div class="comment--img float--left">
                                            <img src="img/blog-img/comment-avatar-02.jpg" alt="" class="img-circle">
                                        </div>

                                        <div class="comment--info ov--h">
                                            <div class="comment--header clearfix">
                                                <a href="#" class="reply btn-link float--right">Reply</a>

                                                <h3 class="name h5">Michel Hocks</h3>

                                                <p class="date">June 17, 2017 at 9:00 am</p>
                                            </div>

                                            <div class="comment--content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nemo minus non sunt corporis modi vitae perferendis beatae.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Item End -->
                                </li>
                            </ul>
                            <!-- Comment Items End -->
                        </li>

                        <li>
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
                        </li>
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

                        <form action="#" data-form="validate">
                            <div class="form-group">
                                <textarea name="comment" placeholder="Your Comment" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <input type="text" name="name" placeholder="Full Name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="website" placeholder="Website" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-default">Post Comment</button>
                        </form>
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