@extends('frontend.home.master')

@section('body')

<!-- Map Start -->
<div class="map" data-trigger="map" data-map-options='{"latitude": "23.790546", "longitude": "90.375583", "zoom": "16", "api_key": "AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"}'></div>
<!-- Map End -->

<!-- Contact Section Start -->
<section class="section">
    <div class="container">
        <div class="row" data-trigger="fitrow">
            <div class="col-sm-4 col-xs-12 pb--60">
                <!-- Contact Info Block Start -->
                <div class="contact--info-block">
                    <div class="icon bg-primary">
                        <i class="fa fa-phone-square"></i>
                    </div>

                    <div class="title">
                        <h2 class="h6">Telephone:</h2>
                    </div>

                    <div class="content">
                        <p><a href="tel:(+123)123123456" class="btn-link">(+123) 123 123456</a></p>
                        <p><a href="tel:(+123)123123456" class="btn-link">(+123) 123 123456</a></p>
                    </div>
                </div>
                <!-- Contact Info Block End -->
            </div>

            <div class="col-sm-4 col-xs-12 pb--60">
                <!-- Contact Info Block Start -->
                <div class="contact--info-block">
                    <div class="icon bg-primary">
                        <i class="fa fa-envelope-open"></i>
                    </div>

                    <div class="title">
                        <h2 class="h6">Email Address:</h2>
                    </div>

                    <div class="content">
                        <p><a href="mailto:example@example.com" class="btn-link">example@example.com</a></p>
                        <p><a href="mailto:example@example.com" class="btn-link">example@example.com</a></p>
                    </div>
                </div>
                <!-- Contact Info Block End -->
            </div>

            <div class="col-sm-4 col-xs-12 pb--60">
                <!-- Contact Info Block Start -->
                <div class="contact--info-block">
                    <div class="icon bg-primary">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <div class="title">
                        <h2 class="h6">Location:</h2>
                    </div>

                    <div class="content">
                        <p>House - 896, East Shewrapara</p>
                        <p>Kafrul, Dhaka -1219, Bangladesh</p>
                    </div>
                </div>
                <!-- Contact Info Block End -->
            </div>
        </div>

        <!-- Contact Form Start -->
        <div class="contact--form pb--60">
            <form action="forms/contact-form.php" data-form="ajax">
                <div class="status"></div>

                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-default">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Contact Form End -->
    </div>
</section>
<!-- Contact Section End -->
@endsection
