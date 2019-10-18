<!DOCTYPE html>
<html>
<head>

	<title>@yield('title')</title>
	   <link rel="shortcut icon" href="template/img/favicon.ico" type="image/x-icon" />
    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CPoppins:400,400i,500,600&display=swap" rel="stylesheet">
    <!-- build:css assets/css/app.min.css -->
    <!--== Leaflet Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/leaflet.min.css" rel="stylesheet" />
    <!--== Nice Select Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/nice-select.min.css" rel="stylesheet" />
    <!--== Slick Slider Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/slick.min.css" rel="stylesheet" />
    <!--== Magnific Popup Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/magnific-popup.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/slicknav.min.css" rel="stylesheet" />
    <!--== Animate Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/animate.min.css" rel="stylesheet" />
    <!--== Ionicons Min CSS ==-->
    <link  rel="stylesheet" href="{{url('/')}}/template/css/ionicons.min.css" rel="stylesheet" />
    <!--== Font-Awesome Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Bootstrap Min CSS ==-->
    <link  rel="stylesheet" href="{{url('/')}}/template/css/bootstrap.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/style.css" rel="stylesheet" />
    <!--== Helper Min CSS ==-->
    <link  rel="stylesheet" href="{{url('/')}}/template/css/helper.min.css" rel="stylesheet" />
    <!-- endbuild -->
</head>
<body>
	@yield('content')
	   <link rel="shortcut icon" href="template/img/favicon.ico" type="image/x-icon" />
    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CPoppins:400,400i,500,600&display=swap" rel="stylesheet">
    <!-- build:css assets/css/app.min.css -->
    <!--== Leaflet Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/leaflet.min.css" rel="stylesheet" />
    <!--== Nice Select Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/nice-select.min.css" rel="stylesheet" />
    <!--== Slick Slider Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/slick.min.css" rel="stylesheet" />
    <!--== Magnific Popup Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/magnific-popup.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/slicknav.min.css" rel="stylesheet" />
    <!--== Animate Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/animate.min.css" rel="stylesheet" />
    <!--== Ionicons Min CSS ==-->
    <link  rel="stylesheet" href="{{url('/')}}/template/css/ionicons.min.css" rel="stylesheet" />
    <!--== Font-Awesome Min CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Bootstrap Min CSS ==-->
    <link  rel="stylesheet" href="{{url('/')}}/template/css/bootstrap.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link rel="stylesheet" href="{{url('/')}}/template/css/style.css" rel="stylesheet" />
    <!--== Helper Min CSS ==-->
    <link  rel="stylesheet" href="{{url('/')}}/template/css/helper.min.css" rel="stylesheet" />
    <!-- endbuild -->

</body>
</html>


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
                                        <img class="thumb-primary" src="{{$item->image}}" alt="Product" style="width: 300px; height: 200px;" />
                                        <img class="thumb-secondary" src="{{$item->image}}" alt="Product" style="width: 300px; height: 150px;"  />
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
                        <!-- End Product Item -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    /.adsajjd
      <div class="newsletter-area-wrapper">
        <div class="container container-wide">
            <div class="newsletter-area-inner bg-img" data-bg="images/dep.jpg" style="width: 1450px ; height: 400px;">
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