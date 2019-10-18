@extends('layouts_template.main')
@section('content')
    <div class="slider-area-wrapper">
        <div class="slider-content-active">
            @foreach($slideshow as $item)
            <div class="slider-slide-item bg-img" data-bg="{{url('/')}}/{{$item->image}}">
                <div class="container container-wide h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="slide-content">
                                <div class="slide-content-inner">
                                    <h3>NEW TECHNOLOGY & BUILD</h3>
                                    <h2>WHEELS &amp; TIRES COLLECTIONS</h2>
                                    <a class="btn btn-white" href="/shop">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
    <!--== End Slider Area Wrapper ==-->

    <!--== Start Banner Area Wrapper ==-->
    <div class="banner-area-wrapper banner-mt">
        <div class="container container-wide">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="template/img/banner/banner-1.jpg" alt="Banner" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="template/img/banner/banner-2.jpg" alt="Banner" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="template/img/banner/banner-3.jpg" alt="Banner" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Banner Area Wrapper ==-->

    <!--== Start Call to Action Area ==-->
    <div class="call-to-action-area sm-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item mt-0">
                        <div class="call-to-action-item__icon">
                            <img src="template/img/icons/icon-1.png" alt="fast delivery">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Free Home Delivery</h3>
                            <p>Provide free home delivery
                                for all product over $100</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item">
                        <div class="call-to-action-item__icon">
                            <img src="template/img/icons/icon-2.png" alt="quality">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Quality Products</h3>
                            <p>We ensure our product
                                quality all times</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item">
                        <div class="call-to-action-item__icon">
                            <img src="template/img/icons/icon-3.png" alt="return">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Online Support</h3>
                            <p>To satisfy our customer we try
                                to give support online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Call to Action Area ==-->

    <!--== Start Best Seller Products Area ==-->
    <div class="best-seller-products-area sm-top">
        <div class="container container-wide">
        	
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                    <div class="section-title">
                        <h2 class="h3">Best Seller</h2>
                        <p>All best seller product are now available for you and your can buy
                            this product from here any time any where so sop now</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product-wrapper">
                        <div class="product-carousel">
                            <!-- Start Product Item -->
                               @foreach($products as $row)
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="{{route('product.chitiet',['id' => $row->id])}}">
                                        <img class="thumb-primary" src="{{$row->image}}" alt="Product" />
                                        <img class="thumb-secondary" src="{{$row->image}}" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="{{route('product.chitiet',['id' => $row->id])}}">{{$row->name}}</a></h4>
                                    <span class="price"><strong>Price:</strong> ${{$row->price}}</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                            </div>
                            <!-- End Product Item -->
                                @endforeach
                       
                        </div>

                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <!--== End Best Seller Products Area ==-->

    <!--== Start Call to action Wrapper ==-->
    <div class="call-to-action-area">
        <div class="call-to-action-content-area bg-img" data-bg="template/img/bg/bg-1.jpg">
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

    <!--== Start Promotion Code Banner Area ==-->
    <div class="promotion-code-area-wrapper sm-top">
        <div class="container container-wide">
            <div class="row">
                <div class="col-md-6">
                    <div class="promotion-code-banner-item mb-sm-30">
                        <img src="template/img/banner/banner-5.jpg" alt="Banner" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="promotion-code-banner-item">
                        <img src="template/img/banner/banner-6.jpg" alt="Banner" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Promotion Code Banner Area ==-->

    <!--== Start Products Area Wrapper ==-->
    <div class="products-area-wrapper sm-top">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                    <div class="section-title">
                        <h2 class="h3">All Of Our Products</h2>
                        <p>All best seller product are now available for you and your can buy
                            this product from here any time any where so sop now</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="product-wrapper columns-5">
                        <!-- Start Product Item -->
                         @foreach($products as $item)
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="{{route('product.chitiet',['id' => $item->id])}}">
                                        <img class="thumb-primary" src="{{$item->image}}" alt="Product" />
                                        <img class="thumb-secondary" src="{{$item->image}}" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="{{route('product.chitiet',['id' => $item->id])}}">{{$item->name}}</a></h4>
                                    <span class="price"><strong>Price:</strong> ${{$item->price}}</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                               
                            </div>
                        </div>
                        <!-- End Product Item -->
                          @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Products Area Wrapper ==-->

    <!--== Start Flash Deals Area ==-->
    <div class="flash-deals-area bg-img" data-bg="template/img/bg/deal-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-11 m-auto">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-lg-6">
                            <div class="flash-deals-thumb text-center text-md-left">
                                <img src="template/img/extra/wheels.png" alt="Deals" />
                            </div>
                        </div>

                        <div class="col-md-7 col-lg-6 text-center">
                            <div class="flash-deals-content">
                                <h2>FLASH DEALS</h2>
                                <h3>HURRY UP AND GET 25% DISCOUNT</h3>
                                <a href="cart.html" class="btn btn-brand">Add to cart</a>

                                <div class="deals-countdown-area">
                                    <div class="ht-countdown" data-date="9/20/2019"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Flash Deals Area ==-->

    <!--== Start Newsletter Area ==-->
    <div class="newsletter-area-wrapper">
        <div class="container container-wide">
            <div class="newsletter-area-inner bg-img" data-bg="template/img/bg/newsletter-bg.jpg">
                <div class="row">
                    <div class="col-lg-8 col-xl-5 m-auto">
                        <div class="newsletter-content text-center">
                            <h4>SPECIAL <span>OFFER</span> FOR SUBSCRIPTION</h4>
                            <h2>GET INSTANT DISCOUNT FOR MEMBERSHIP</h2>
                            <p>Subscribe our newsletter and all latest news of our <br>latest product, promotion and offers</p>

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
      <div class="brand-logo-area sm-top sm-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-logo-content">
                        <div class="brand-logo-item">
                            <a href="#"><img src="template/img/brand-logo/brand-1.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="template/img/brand-logo/brand-2.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="template/img/brand-logo/brand-3.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="template/img/brand-logo/brand-4.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="template/img/brand-logo/brand-5.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="template/img/brand-logo/brand-3.png" alt="Logo" /></a>
                        </div>

                        <div class="brand-logo-item">
                            <a href="#"><img src="template/img/brand-logo/brand-1.png" alt="Logo" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection