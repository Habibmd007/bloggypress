<!-- Banner Section Start -->
<section class="banner--section">
    <div class="container">
        <div class="row">

            
            <div class="col-md-6 pb--60" data-mh="banner02">
                <!-- Banner Item Start -->
                <div class="banner--item style--2" data-bg-img="img/banner-img/slider-bg-01.jpg" data-overlay="0.5">
                    <!-- Banner Content Start -->
                    <div class="banner--content p--60-30 text-white text-center">
                        <div class="tag" data-overlay="0.5" data-overlay-color="primary">
                            <p><a href="category.html" class="btn-link">{{$featured->category->cat}}</a></p>
                        </div>

                        <div class="title">
                            <h2 class="h2 text-white"><a href="blog-details.html" class="btn-link">{{$featured->head}}</a></h2>
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
            </div>

            <div class="col-md-6 pb--30" data-mh="banner02">
                <div class="row">
                    @foreach ($cats as $cat)
                    <div class="col-xs-6 col-xxs-12">
                        <!-- Category Item Start -->
                        <div class="category--item">
                            <a href="category.html" data-overlay="0.7" data-overlay-color="primary">
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