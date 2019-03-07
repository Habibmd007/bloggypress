@extends('frontend.home.master')
@section('body')
<!-- About Section Start -->
<section class="section">
    <div class="container">
        <!-- Post Author Start -->
        <div class="post--author clearfix pb--50">
            <div class="img float--left">
                <img src="img/blog-img/post-author.jpg" alt="" class="img-circle">
            </div>

            <div class="info ov--h">
                <div class="header clearfix">
                    <h2 class="name h6">Karen Rosalie</h2>

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur eius quaerat ratione, accusamus vitae. Expedita sapiente odit, saepe vero, nobis magni cupiditate possimus sed ipsa exercitationem quos, libero voluptatibus. Ex eum omnis consequatur sapiente ea corrupti excepturi explicabo, blanditiis quaerat temporibus ducimus facere reiciendis quae, velit earum qui ut vitae cumque accusamus architecto.</p>
                </div>
            </div>
        </div>
        <!-- Post Author End -->

        <div class="row">
            <div class="col-md-6 pb--60">
                <!-- Video Block Start -->
                <div class="video--block embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/aqz-KE-bpKQ?rel=0&amp;controls=0&amp;showinfo=0&amp;wmode=transparent" allowfullscreen=""></iframe>
                </div>
                <!-- Video Block End -->
            </div>

            <div class="col-md-6 pb--60">
                <!-- Text Block Start -->
                <div class="text--block">
                    <h3>It is a long established fact that a reader will be distracted by the readable content</h3>

                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal making it look like readable english many desktop.</p>

                    <blockquote>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking.</p>
                    </blockquote>
                </div>
                <!-- Text Block End -->
            </div>
        </div>

        <div class="row" data-trigger="fitrow">
            <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                <!-- Info Block Start -->
                <div class="info--block text-center">
                    <div class="icon bg-primary">
                        <i class="fa fa-globe"></i>
                    </div>

                    <div class="title text-uppercase">
                        <h3 class="h4">Technology Articles</h3>
                    </div>

                    <div class="desc fs--14">
                        <p>Aliquam quam laudantium suscipit ullam aut perferendis vel dicta blanditiis eligendi ratione consequatur.</p>
                    </div>
                </div>
                <!-- Info Block End -->
            </div>

            <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                <!-- Info Block Start -->
                <div class="info--block text-center">
                    <div class="icon bg-primary">
                        <i class="fa fa-pencil-square-o"></i>
                    </div>

                    <div class="title text-uppercase">
                        <h3 class="h4">Copywriting</h3>
                    </div>

                    <div class="desc fs--14">
                        <p>Aliquam quam laudantium suscipit ullam aut perferendis vel dicta blanditiis eligendi ratione consequatur.</p>
                    </div>
                </div>
                <!-- Info Block End -->
            </div>

            <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                <!-- Info Block Start -->
                <div class="info--block text-center">
                    <div class="icon bg-primary">
                        <i class="fa fa-envelope-open-o"></i>
                    </div>

                    <div class="title text-uppercase">
                        <h3 class="h4">Formal Letter</h3>
                    </div>

                    <div class="desc fs--14">
                        <p>Aliquam quam laudantium suscipit ullam aut perferendis vel dicta blanditiis eligendi ratione consequatur.</p>
                    </div>
                </div>
                <!-- Info Block End -->
            </div>

            <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                <!-- Info Block Start -->
                <div class="info--block text-center">
                    <div class="icon bg-primary">
                        <i class="fa fa-clone"></i>
                    </div>

                    <div class="title text-uppercase">
                        <h3 class="h4">White Paper</h3>
                    </div>

                    <div class="desc fs--14">
                        <p>Aliquam quam laudantium suscipit ullam aut perferendis vel dicta blanditiis eligendi ratione consequatur.</p>
                    </div>
                </div>
                <!-- Info Block End -->
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->
@endsection