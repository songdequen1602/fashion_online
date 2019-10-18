@extends('layouts_template.main')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <div class="page-content-wrapper sp-y">
        <div class="shop-page-action-bar mb-30">
            <div class="container container-wide">
                <div class="action-bar-inner">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="shop-layout-switcher mb-15 mb-sm-0">
                                <ul class="layout-switcher nav">
                                    <li data-layout="grid" class="active"><i class="fa fa-th"></i></li>
                                    <li data-layout="list"><i class="fa fa-th-list"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="sort-by-wrapper">
                                <label for="sort" class="sr-only">Sort By</label>
                                <select name="sort" id="sort">
                                   @foreach($category as $item)
                                    <option value="name" id="show">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-page-product">
            <div class="container container-wide">
                <div class="product-wrapper product-layout layout-grid">
                    <div class="row mtn-30">
                        <!-- Start Product Item -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="template/img/product/product-6.png" alt="Product" />
                                        <img class="thumb-secondary" src="template/img/product/product-7.png" alt="Product" />
                                    </a>

                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                </div>

                                <div class="product-item__content">
                                    <div class="product-item__info">
                                        <h4 class="title"><a href="single-product.html">Auto Clutch & Brake</a></h4>
                                        <span class="price"><strong>Price:</strong> $165.00</span>
                                    </div>

                                    <div class="product-item__action">
                                        <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                    </div>

                                    <div class="product-item__desc">
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circles</p>
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circes occur in and pain can
                                            procure him some great ple cum soluta nobis est eligendi optio</p>
                                    </div>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="template/img/product/product-2.png" alt="Product" />
                                        <img class="thumb-secondary" src="template/img/product/product-3.png" alt="Product" />
                                    </a>

                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                </div>

                                <div class="product-item__content">
                                    <div class="product-item__info">
                                        <h4 class="title"><a href="single-product.html">17 INCH RIMS 8 LUG</a></h4>
                                        <span class="price"><strong>Price:</strong> $235.00</span>
                                    </div>

                                    <div class="product-item__action">
                                        <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                    </div>

                                    <div class="product-item__desc">
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circles</p>
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circes occur in and pain can
                                            procure him some great ple cum soluta nobis est eligendi optio</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="template/img/product/product-4.png" alt="Product" />
                                        <img class="thumb-secondary" src="template/img/product/product-5.png" alt="Product" />
                                    </a>

                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                </div>

                                <div class="product-item__content">
                                    <div class="product-item__info">
                                        <h4 class="title"><a href="single-product.html">AIR INTAKE SYSTEM</a></h4>
                                        <span class="price"><strong>Price:</strong> $125.00</span>
                                    </div>

                                    <div class="product-item__action">
                                        <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                    </div>

                                    <div class="product-item__desc">
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circles</p>
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circes occur in and pain can
                                            procure him some great ple cum soluta nobis est eligendi optio</p>
                                    </div>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">35%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="template/img/product/product-11.png" alt="Product" />
                                        <img class="thumb-secondary" src="template/img/product/product-10.png" alt="Product" />
                                    </a>

                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                </div>

                                <div class="product-item__content">
                                    <div class="product-item__info">
                                        <h4 class="title"><a href="single-product.html">LEATHER STEERING WHEEL</a></h4>
                                        <span class="price"><strong>Price:</strong> $25.00</span>
                                    </div>

                                    <div class="product-item__action">
                                        <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                    </div>

                                    <div class="product-item__desc">
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circles</p>
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circes occur in and pain can
                                            procure him some great ple cum soluta nobis est eligendi optio</p>
                                    </div>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">15%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="template/img/product/product-13.png" alt="Product" />
                                        <img class="thumb-secondary" src="template/img/product/product-7.png" alt="Product" />
                                    </a>

                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                </div>

                                <div class="product-item__content">
                                    <div class="product-item__info">
                                        <h4 class="title"><a href="single-product.html">Auto Clutch & Brake</a></h4>
                                        <span class="price"><strong>Price:</strong> $165.00</span>
                                    </div>

                                    <div class="product-item__action">
                                        <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                    </div>

                                    <div class="product-item__desc">
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circles</p>
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circes occur in and pain can
                                            procure him some great ple cum soluta nobis est eligendi optio</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="template/img/product/product-3.png" alt="Product" />
                                        <img class="thumb-secondary" src="template/img/product/product-2.png" alt="Product" />
                                    </a>

                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                </div>

                                <div class="product-item__content">
                                    <div class="product-item__info">
                                        <h4 class="title"><a href="single-product.html">17 INCH RIMS 8 LUG</a></h4>
                                        <span class="price"><strong>Price:</strong> $235.00</span>
                                    </div>

                                    <div class="product-item__action">
                                        <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                    </div>

                                    <div class="product-item__desc">
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circles</p>
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circes occur in and pain can
                                            procure him some great ple cum soluta nobis est eligendi optio</p>
                                    </div>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="template/img/product/product-7.png" alt="Product" />
                                        <img class="thumb-secondary" src="template/img/product/product-9.png" alt="Product" />
                                    </a>

                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                </div>

                                <div class="product-item__content">
                                    <div class="product-item__info">
                                        <h4 class="title"><a href="single-product.html">AIR INTAKE SYSTEM</a></h4>
                                        <span class="price"><strong>Price:</strong> $125.00</span>
                                    </div>

                                    <div class="product-item__action">
                                        <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                    </div>

                                    <div class="product-item__desc">
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circles</p>
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circes occur in and pain can
                                            procure him some great ple cum soluta nobis est eligendi optio</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->

                        <!-- Start Product Item -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="template/img/product/product-12.png" alt="Product" />
                                        <img class="thumb-secondary" src="template/img/product/product-13.png" alt="Product" />
                                    </a>

                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                </div>

                                <div class="product-item__content">
                                    <div class="product-item__info">
                                        <h4 class="title"><a href="single-product.html">LEATHER STEERING WHEEL</a></h4>
                                        <span class="price"><strong>Price:</strong> $25.00</span>
                                    </div>

                                    <div class="product-item__action">
                                        <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                    </div>

                                    <div class="product-item__desc">
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circles</p>
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circes occur in and pain can
                                            procure him some great ple cum soluta nobis est eligendi optio</p>
                                    </div>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">11%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Item -->
                    </div>
                </div>
            </div>
        </div>

        <div class="shop-page-action-bar mt-30">
            <div class="container container-wide">
                <div class="action-bar-inner">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <nav class="pagination-wrap mb-10 mb-sm-0">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-sm-6 text-center text-sm-right">
                            <p>Showing 1–12 of 26 results</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
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
</body>

</html>
@endsection