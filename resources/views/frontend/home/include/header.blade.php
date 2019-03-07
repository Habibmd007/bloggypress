<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>BloggyPress - Responsive Personal Blog HTML5 Template</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="description" content="BloggyPress - Responsive Personal Blog HTML5 Template">
    <meta name="keywords" content="blog, blogging, personal, clean, modern, masonry, simple, html5, css3, template, responsive">
    <meta name="author" content="ThemeLooks">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="{{asset('/')}}img/favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPlayfair+Display:400,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="{{asset('/')}}css/font-awesome.min.css">
    
    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
    
    <!-- ==== Owl Carousel Plugin ==== -->
    <link rel="stylesheet" href="{{asset('/')}}css/owl.carousel.min.css">
    
    <!-- ==== Magnific Popup Plugin ==== -->
    <link rel="stylesheet" href="{{asset('/')}}css/magnific-popup.min.css">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('/')}}css/responsive-style.css">
    
    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('/')}}css/colors/color-1.css" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('/')}}css/custom.css">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader" class="bg-primary">
        <div class="preloader--inner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section">
            <!-- Header Topbar Start -->
            <div class="header--topbar text-center text-white bg-dark fs--14">
                <div class="container">
                    <!-- Header Date Start -->
                    <div class="header--date">
                        <p>Thursday <span class="text-primary">10 March</span> 2017</p>
                    </div>
                    <!-- Header Date End -->

                    <!-- Header Search Bar Start -->
                    <div class="header--search-bar">
                        <form action="#" data-form="validate">
                            <input type="search" name="search" placeholder="Search..." class="form-control" required>

                            <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Header Search Bar End -->

                    <!-- Header Social Start -->
                    <div class="header--social">
                        <span>Follow Me:</span>

                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <!-- Header Social End -->
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Navbar Start -->
            <nav class="header--navbar navbar">
                <div class="container">
                    <!-- Header Logo Start -->
                    <div class="header--logo">
                        <a href="index.html">
                            <img src="{{asset('/')}}img/logo.png" alt="">
                        </a>
                    </div>
                    <!-- Header Logo End -->

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse text-center">
                        <!-- Header nav Links Start -->
                        <ul class="header--nav-links nav">
                            <li class="active"><a href="{{route('/')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('blogpages')}}">Blog Details Right</a></li>
                                    <li><a href="{{route('author')}}">Author</a></li>
                                    <li><a href="{{route('category')}}">Category</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="#">Purchase</a></li>
                        </ul>
                        <!-- Header nav Links End -->
                    </div>
                </div>
            </nav>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->