 
 @include('layouts_template.style')
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
                         @foreach($cart as $item)
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="single-product.html">
                                        <img class="thumb-primary" src="{{$item->image}}" alt="Product" />
                                        <img class="thumb-secondary" src="template/img/product/product-7.png" alt="Product" />
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
                                    <h4 class="title"><a href="single-product.html">{{$item->name}}</a></h4>
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