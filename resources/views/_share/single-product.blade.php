@extends('layouts_template.main')
@section('content')
<div class="page-content-wrapper sp-y">
    <div class="product-details-page-content">
        <div class="container container-wide">
            <div class="row">
                <div class="col-12">  
                    <div class="row">
                        <!-- Start Product Thumbnail Area -->
                        <div class="col-md-5">
                            <div class="product-thumb-area">
                                <div class="product-details-thumbnail">
                                    <div class="product-thumbnail-slider" id="thumb-gallery">
                                        <figure class="pro-thumb-item" data-mfp-src="{{url('/')}}/{{$product->image}}">
                                            <img src="{{url('/')}}/{{$product->image}}" alt="Product Details" />
                                        </figure>
                                    </div>
                                    <a href="#thumb-gallery" class="btn-large-view btn-gallery-popup">View Larger <i class="fa fa-search-plus"></i></a>
                                </div>
                                <div class="product-details-thumbnail-nav">


                                </div>
                            </div>
                        </div>
                        <!-- End Product Thumbnail Area -->

                        <!-- Start Product Info Area -->
                        <div class="col-md-7">
                            <div class="product-details-info-content-wrap">
                                <div class="prod-details-info-content">
                                    <h2>{{$product->name}}</h2>
                                    <h5 class="price"><strong>Price:</strong> <span class="price-amount">${{$product->price}}</span>
                                    </h5>
                                    <p>{{$product->detail}}</p>
                                  

                                    <div class="product-config">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th class="config-label">Color</th>
                                                    <td class="config-option">
                                                        <div class="config-color">
                                                            <a href="#">Black</a>
                                                            <a href="#">Blue</a>
                                                            <a href="#">Green</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="config-label">Size</th>
                                                    <td class="config-option">
                                                        <div class="config-color">
                                                            <a href="#">Large</a>
                                                            <a href="#">Medium</a>
                                                            <a href="#">Small</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="product-action">
                                        <div class="action-top d-sm-flex">
                                            <div class="pro-qty mr-3 mb-4 mb-sm-0">
                                                <label for="quantity" class="sr-only">Quantity</label>
                                                <input type="text" id="quantity" title="Quantity" value="1" />
                                            </div>
                                            <button class="btn btn-bordered">Add to Cart</button>
                                        </div>
                                    </div>

                                    <div class="product-meta">
                                        <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>

                                        <span class="posted_in">Categories:
                                            <a href="#">Best Seller,</a>
                                            <a href="#">Parts,</a>
                                            <a href="#">Shop</a>
                                        </span>

                                        <span class="tagged_as">Tags:
                                            <a href="#">Seller,</a>
                                            <a href="#">Modern,</a>
                                            <a href="#">Parts</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Info Area -->                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-description-review">
                                <!-- Product Description Tab Menu -->
                                <ul class="nav nav-tabs desc-review-tab-menu" id="desc-review-tab" role="tablist">
                                    <li>
                                        <a class="active" id="desc-tab" data-toggle="tab" href="#descriptionContent" role="tab">Description</a>
                                    </li>
                                    <li>
                                        <a id="profile-tab" data-toggle="tab" href="#reviewContent">Review (3)</a>
                                    </li>
                                </ul>

                                <!-- Product Description Tab Content -->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="descriptionContent">
                                        <div class="description-content">
                                            <div class="product-carousel">
                                                <!-- product item -->
                                                @foreach($relativeProduct as $item)
                                                <div class="product-item">
                                                    <div class="product-item__thumb">
                                                        <a href="{{route('product.chitiet',['id' => $item->id])}}">
                                                            <img class="thumb-primary" src="{{url('/')}}/{{$item->image}}" alt="Product" />
                                                            <img class="thumb-secondary" src="{{url('/')}}/{{$item->image}}" alt="Product" />
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
                                                <!-- End Product Item -->
                                                @endforeach
                                                <!--   endproduct -->
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="tab-pane fade" id="reviewContent">
                                        <div class="product-rating-wrap">
                                            <div class="average-rating">
                                                <h4>Comments<span>(2)</span></h4>
                                                <span>Based on 2 Comments</span>
                                            </div>

                                            <div class="display-ratings">
                                                @foreach($comments as $comment)
                                                <div class="rating-item">
                                                    <div class="rating-author-pic">
                                                        <img src="{{url('/')}}/template/img/extra/author-1.jpg" alt="author" />
                                                    </div>

                                                    <div class="rating-author-txt">
                                                        <div class="rating-meta">
                                                            <h3>{{$comment->curtomer_name}}</h3>
                                                            <span class="time">{{$comment->created_at}}</span>
                                                        </div>

                                                        <p>{{$comment->address}}.</p>
                                                    </div>
                                                </div>
                                                @endforeach
                                        </div>
                                         <div class="rating-form-wrapper">
                                                    <h3>Add your Reviews</h3>
                                                    <form action="{{route('product.addnew',['id' => $product->id])}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$product->id}}" >
                                                        <div class="rating-form row">
                                                            <div class="col-12">
                                                                <h5>Your Rating:</h5>
                                                                <div class="rating-star fix mb-20">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-input-item mt-30 mt-md-0">
                                                                    <label for="name" class="sr-only">Name</label>
                                                                    <input type="text" id="name" name="curtomer_name" placeholder="Name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-input-item mt-30 mt-md-0">
                                                                    <label for="email" class="sr-only">Email</label>
                                                                    <input type="email" id="email" name ="email" placeholder="Email" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-input-item mt-30 mb-40">
                                                                    <label for="your-review" class="sr-only">review</label>
                                                                    <textarea rows="4" name="address" id="your-review"  placeholder="Write a review"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-22">
                                                                <button class="btn btn-brand">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<button class="btn-scroll-top"><i class="ion-chevron-up"></i></button>
<aside class="off-canvas-wrapper off-canvas-menu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content">
            <div class="off-canvas-header">
                <div class="logo">
                    <a href="index.html"><img src="{{url('/')}} /assets/img/logo.png" alt="Logo"></a>
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
<style type="text/css">
.display-ratings{
    width: 100%;
    height:300px;
    overflow: auto; 
}
.product-item {
    width: 25%;
    height: 150px;
    float: left;
    margin-left: 60px;
}
.tab-content{
    height: 950px;
}
</style>
@endsection