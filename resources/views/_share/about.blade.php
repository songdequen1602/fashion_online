@extends('layouts_template.main')
@section('content')

    <div class="page-content-wrapper sm-top">
        <div class="about-page-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-1 order-md-0">
                        <div class="about-content">
                            <h2 class="h3 mb-sm-20">About Lukas</h2>
                            <p>This is a list of automotive parts mostly for vehicles using internal combustion engines
                                which are manufactured components of automobiles.</p>
                            <p>This category is for components and parts that make up automobile (car) bodies including
                                accessories.</p>
                            <p>On motorbikes their main function is to shield the rider from wind, though not as completely
                                as in a car, whereas on sports and racing motorcycles the main function is reducing drag
                                when the rider</p>
                        </div>
                    </div>

                    <div class="col-lg-6 order-0">
                        <div class="about-thumb mb-sm-30">
                            <img src="template/img/banner/a-1.jpg" alt="About" />
                        </div>
                    </div>
                </div>

                <div class="row align-items-center sm-top">
                    <div class="col-lg-6">
                        <div class="about-thumb video-play mb-sm-30">
                            <img src="template/img/banner/a-2.jpg" alt="About" />
                            <a href="https://www.youtube.com/watch?=17&v=S-UcVwzrAqo" class="btn-video-popup"><i class="ion-play"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2 class="h3">Our mission</h2>
                            <p>This is a list of automotive parts mostly for vehicles using internal combustion engines
                                which are manufactured components of automobiles.</p>
                            <p>This category is for components and parts that make up automobile (car) bodies including
                                accessories.</p>
                            <p>On motorbikes their main function is to shield the rider from wind, though not as completely
                                as in a car, whereas on sports and racing motorcycles the main function is reducing drag
                                when the rider</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Content Wrapper ==-->

    <!--== Start Call to action Wrapper ==-->
    <div class="call-to-action-area sm-top">
        <div class="call-to-action-content-area home-2 bg-img" data-bg="template/img/bg/bg-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="call-to-action-txt">
                            <h2>ALL KINDS OF PARTS THAT YOU <br> NEED CAN FIND HERE</h2>
                                <a href="shop.html" class="btn btn-brand">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-to-action-image-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="template/img/bg/bg-car.png" alt="Car" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Call to action Wrapper ==-->

    <!--== Start Newsletter Area ==-->
    <div class="newsletter-area-wrapper sp-lg-top sp-md-top mt-0">
        <div class="container container-wide">
            <div class="newsletter-area-inner bg-img" data-bg="template/img/bg/newsletter-bg-2.jpg">
                <div class="row">
                    <div class="col-lg-8 col-xl-5 offset-lg-3 offset-xl-6">
                        <div class="newsletter-content text-center">
                            <h4>SPECIAL <span>OFFER</span> FOR SUBSCRIPTION</h4>
                            <h2>GET INSTANT DISCOUNT FOR MEMBERSHIP</h2>
                            <p>Subscribe our newsletter and all latest news of our <br>latest product, promotion and offers
                        </p>

                                <div class="newsletter-form-wrap">
                                    <form action="#" method="post">
                                        <div class="form-content">
                                            <input type="email" placeholder="Enter your email here" />
                                            <button class="btn-newsletter">Submit</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Newsletter Area ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
  
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start Need Help area ==-->
    <div class="need-help-area bg-img sm-top" data-bg="template/img/bg/bg-2.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-7 text-center text-sm-left">
                    <div class="need-help-content mb-sm-20">
                        <h3>Need Help ?</h3>
                        <p>Call our support 24/7 at 01234-567-890</p>
                    </div>
                </div>

                <div class="col-sm-5 text-center text-sm-right">
                    <a href="contact.html" class="btn btn-black">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
    <!--== End Need Help area ==-->

    <!--== Start Footer Area Wrapper ==-->

    <!--== End Footer Area Wrapper ==-->

    <!-- Scroll Top Button -->
    <button class="btn-scroll-top"><i class="ion-chevron-up"></i></button>



    <!--== Start Responsive Menu Wrapper ==-->
    <aside class="off-canvas-wrapper off-canvas-menu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner">
            <!-- Start Off Canvas Content -->
            <div class="off-canvas-content">
                <div class="off-canvas-header">
                    <div class="logo">
                        <a href="index.html"><img src="template/img/logo.png" alt="Logo"></a>
                    </div>
                    <div class="close-btn">
                        <button class="btn-close"><i class="ion-android-close"></i></button>
                    </div>
                </div>

                <!-- Content Auto Generate Form Main Menu Here -->
                <div class="res-mobile-menu mobile-menu">

                </div>
            </div>
        </div>
    </aside>
@endsection