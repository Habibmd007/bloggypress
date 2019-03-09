@extends('frontend.home.master')
@section('body')
<!-- About Section Start -->
<section class="section">
    <div class="container">
        <!-- Post Author Start -->
        @foreach ($bios as $item)
        <div class="post--author clearfix pb--50">

            <div class="img float--left">
                <img src="{{$item->img}}" alt="" class="img-circle">
            </div>
                
            <div class="info ov--h">
                <div class="header clearfix">
                    <h2 class="name h6">{{$item->name}}</h2>

                    <p class="role float--left">{{$item->desig}}</p>

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
                    <p>{{$item->text}}</p>
                </div>
            </div>
            
        </div>
        @endforeach


        <!-- Post Author End -->
        @foreach ($posts as $item)
            
        <div class="row">
            <div class="col-md-6 pb--60">
                <!-- Video Block Start -->
                <div class="video--block embed-responsive embed-responsive-16by9">
                    <iframe src="{{$item->video}}" allowfullscreen=""></iframe>
                </div>
                <!-- Video Block End -->
            </div>

            <div class="col-md-6 pb--60">
                <!-- Text Block Start -->
                <div class="text--block">
                    <h3>{{$item->head}}</h3>

                    <p>{{$item->text}}</p>

                    <blockquote>
                        <p>{{$item->qoute}}</p>
                    </blockquote>
                </div>
                <!-- Text Block End -->
            </div>
        </div>
        @endforeach


        

        <div class="row" data-trigger="fitrow">

            @foreach ($infs as $inf )
                
            <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                <!-- Info Block Start -->
                <div class="info--block text-center">
                    <div class="icon bg-primary">
                        <i class="fa {{$inf->font}}"></i>
                    </div>

                    <div class="title text-uppercase">
                        <h3 class="h4">{{$inf->head}}</h3>
                    </div>

                    <div class="desc fs--14">
                        <p>{{$inf->text}}</p>
                    </div>
                </div>
                <!-- Info Block End -->
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- About Section End -->
@endsection