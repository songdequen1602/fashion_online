<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lukas - Car Parts Store eCommerce HTML Template</title>
   
</head>
  <header class="header-area">
        <div class="container container-wide">
            <div class="row align-items-center">
                <div class="col-sm-4 col-lg-2">
                    <div class="site-logo text-center text-sm-left">
                        @foreach ($baiviet as $item)                       
                        <a href="/index"><img src="{{url('/')}}/{{$item->logo}}" alt="Logo" /></a>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-7 d-none d-lg-block">
                    <div class="site-navigation">
                        <ul class="main-menu nav">
                            <li class="has-submenu"><a href="/index">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-boxed.html">Home Box Layout</a></li>
                                </ul>
                            </li>
                            <li><a href="/about">About</a></li>
                            <li class="has-submenu"><a href="/shop">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="/blog">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Single Blog</a></li>
                                    <li><a href="blog-details-sidebar.html">Single Blog Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li class="has-submenu"><a href="index.html">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-8 col-lg-3">
                    <div class="site-action d-flex justify-content-center justify-content-sm-end align-items-center">
                        <ul class="login-reg-nav nav">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>

                        <div class="mini-cart-wrap">
                            <a href="{{route('cart')}}" class="btn-mini-cart">
                                <i class="ion-bag"></i>
                                <span class="cart-total">3</span>
                            </a>

                            <div class="mini-cart-content">
                                <div class="mini-cart-product">
                                    <div class="mini-product">
                                        <div class="mini-product__thumb">
                                            <a href="single-product.html"><img src="template/img/product/product-1.png" alt="product" /></a>
                                        </div>
                                        <div class="mini-product__info">
                                            <h2 class="title"><a href="single-product.html">Auto Clutch & Brake</a></h2>

                                            <div class="mini-calculation">
                                                <p class="price">5 x <span>$20.33</span></p>
                                                <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mini-product">
                                        <div class="mini-product__thumb">
                                            <a href="single-product.html"><img src="template/img/product/product-2.png" alt="product" /></a>
                                        </div>
                                        <div class="mini-product__info">
                                            <h2 class="title"><a href="single-product.html">Leather Steering Wheel</a></h2>

                                            <div class="mini-calculation">
                                                <p class="price">5 x <span>$20.33</span></p>
                                                <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mini-product">
                                        <div class="mini-product__thumb">
                                            <a href="single-product.html"><img src="template/img/product/product-3.png" alt="product" /></a>
                                        </div>
                                        <div class="mini-product__info">
                                            <h2 class="title"><a href="single-product.html">Leather Steering Wheel</a></h2>

                                            <div class="mini-calculation">
                                                <p class="price">5 x <span>$20.33</span></p>
                                                <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="responsive-menu d-lg-none">
                            <button class="btn-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    