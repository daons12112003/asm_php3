
@extends('user.client')
@section('content')

<section class="main-content-section">
    <div class="container">
        <!-- BSTORE-BREADCRUMB START -->
        <div class="bstore-breadcrumb">
            <a href="index.html">HOMe<span><i class="fa fa-caret-right"></i> </span> </a>
            <span> <i class="fa fa-caret-right"> </i> </span>
            <a href="shop-gird.html"> women </a>
            <span> Faded Short Sleeves T-shirt </span>
        </div>
        <!-- BSTORE-BREADCRUMB END -->
        
        <div class="row">
            <div class="col-lg-9">
                <!-- SINGLE-PRODUCT-DESCRIPTION START -->
                <div class="row">
                    <div class="col-lg-5 col-md-4">
                        <div class="single-product-view">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="thumbnail_1">
                                   
                                    <div class="single-product-image">
                                        <img src="{{$product->image?''.Storage::url ($product->image):''}}" alt="single-product-image" />
                                        <a class="new-mark-box" href="#">new</a>
                                        <a class="fancybox" href="{{$product->image?''.Storage::url ($product->image):''}}"
                                            data-fancybox-group="gallery"><span class="btn large-btn">View larger <i
                                                    class="fa fa-search-plus"></i></span></a>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-7 col-md-8">
                        <div class="single-product-descirption">
                            <h2>{{$product->name}}</h2>
                            <div class="single-product-social-share">
                                <ul>
                                    <li><a href="#" class="twi-link"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    <li><a href="#" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                    <li><a href="#" class="g-plus-link"><i class="fa fa-google-plus"></i>Google+</a>
                                    </li>
                                    <li><a href="#" class="pin-link"><i class="fa fa-pinterest"></i>Pinterest</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-product-review-box">
                                <div class="rating-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-empty"></i>
                                </div>
                                <div class="read-reviews">
                                    <a href="#">Read reviews (1)</a>
                                </div>
                                <div class="write-review">
                                    <a href="#">Write a review</a>
                                </div>
                            </div>
                            <div class="single-product-condition">
                                <p>Reference: <span>demo_1</span></p>
                                <p>Condition: <span>New product</span></p>
                            </div>
                            <div class="single-product-price">
                                <h2>{{$product->price}} VNĐ</h2>
                            </div>
                            <div class="single-product-desc">
                                <p>{{$product->description}}</p>
                                <div class="product-in-stock">
                                    <p>300 Items<span>In stock</span></p>
                                </div>
                            </div>
                            <div class="single-product-info">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-print"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                            
                            <form action="{{route('cart_add')}}" method="POST">
                                @csrf
                            <input type="hidden" name="phone_id" value="{{ $product->id }}">
                            <div class="single-product-quantity">
                                <p class="small-title">Quantity</p>
                                <div class="cart-quantity">
                                    <div class="cart-plus-minus-button single-qty-btn">
                                        <input class="cart-plus-minus sing-pro-qty" type="number"  name="quantity"
                                            value="1" min="1">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="single-product-add-cart">
                                <button class="add-cart-text" type="submit" href="">Add to cart</button>
                            </div>
                            </form>
                           


                            
                           
                        </div>
                    </div>
                </div>
                <!-- SINGLE-PRODUCT-DESCRIPTION END -->

                <!-- SINGLE-PRODUCT INFO TAB START -->
                <div class="product-more-info-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs more-info-tab">
                        <li class="active"><a href="#moreinfo" data-bs-toggle="tab">more info</a></li>
                        <li><a href="#datasheet" data-bs-toggle="tab">data sheet</a></li>
                        <li><a href="#review" data-bs-toggle="tab">reviews</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="moreinfo">
                            <div class="tab-description">
                                <p>Fashion has been creating well-designed collections since 2010. The brand
                                    offers feminine designs delivering stylish separates and statement
                                    dresses which have since evolved into a full ready-to-wear collection in
                                    which every item is a vital part of a woman's wardrobe. The result?
                                    Cool, easy, chic looks with youthful elegance and unmistakable signature
                                    style. All the beautiful pieces are made in Italy and manufactured with
                                    the greatest attention. Now Fashion extends to a range of accessories
                                    including shoes, hats, belts and more!</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="datasheet">
                            <div class="deta-sheet">
                                <table class="table-data-sheet">
                                    <tbody>
                                        <tr class="odd">
                                            <td>Compositions</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="td-bg">Styles</td>
                                            <td class="td-bg">Casual</td>
                                        </tr>
                                        <tr class="odd">
                                            <td>Properties</td>
                                            <td>Short Sleeve</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="review">
                            <div class="row tab-review-row">
                                <div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 padding-5">
                                    <div class="tab-rating-box">
                                        <span>Grade</span>
                                        <div class="rating-box">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-empty"></i>
                                        </div>
                                        <div class="review-author-info">
                                            <strong>write A REVIEW</strong>
                                            <span>06/22/2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-7 col-sm-8 col-md-8 col-lg-9 padding-5">
                                    <div class="write-your-review">
                                        <p><strong>write A REVIEW</strong></p>
                                        <p>write A REVIEW</p>
                                        <span class="usefull-comment">Was this comment useful to you?
                                            <span>Yes</span><span>No</span></span>
                                        <a href="#">Report abuse </a>
                                    </div>
                                </div>
                                <a href="#" class="write-review-btn">Write your review!</a>
                            </div>
                        </div>
                    </div>
                </div>					
                <!-- SINGLE-PRODUCT INFO TAB END -->

                <!-- RELATED-PRODUCTS-AREA START -->
                <div class="left-title-area">
                    <h2 class="left-title">related products</h2>
                </div>
                
                <div class="related-product-area featured-products-area">
                    <div class="carousel-wrap">
                        <!-- RELATED-CAROUSEL START -->
                        <div class="related-product owl-carousel">
                            <!-- SINGLE-PRODUCT-ITEM START -->
                            @foreach($phones as $item)
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="{{ route('route_detail', ['id' => $item->id]) }}"><img src="{{$item->image?''.Storage::url ($item->image):''}}"
                                            alt="product-image" /></a>
                                </div>
                                <div class="product-info">
                                    <div class="customar-comments-box">
                                        <div class="rating-box">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-empty"></i>
                                        </div>
                                        <div class="review-box">
                                            <span>1 Review(s)</span>
                                        </div>
                                    </div>
                                    <a href="#">{{$item->name}}</a>
                                    <div class="price-box">
                                        <span class="price">{{$item->price}} VNĐ</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- SINGLE-PRODUCT-ITEM END -->

                        </div>
                        <!-- RELATED-CAROUSEL END -->
                    </div>
                </div>
                <!-- RELATED-PRODUCTS-AREA END -->

            </div>
            <!-- RIGHT SIDE BAR START -->
            <div class="col-lg-3">
                <!-- SINGLE SIDE BAR START -->
                <div class="single-product-right-sidebar">
                    <h2 class="left-title">Viewed products</h2>
                    @foreach($phones as $item)
                    <ul>
                        <li>
                            <a href="{{ route('route_detail', ['id' => $item->id]) }}"><img src="{{$item->image?''.Storage::url ($item->image):''}}" width="150px" /></a>
                            <div class="r-sidebar-pro-content">
                                <h5><a href="#">{{$item->name}}</a></h5>
                                <p>{{$item->description}}</p>
                            </div>
                        </li>
                        
                    </ul>
                    @endforeach
                </div>
                <!-- SINGLE SIDE BAR END -->

                <!-- SINGLE SIDE BAR START -->
                <div class="flex single-product-right-sidebar clearfix">
                    <h2 class="left-title">Tags </h2>
                    @foreach($categorys as $ct)
                    <div class="category-tag">
                        <a href="#">{{$ct->name}}</a>
                        
                    </div>
                    @endforeach
                </div>
                <!-- SINGLE SIDE BAR END -->

                <!-- SINGLE SIDE BAR START -->
                <div class="single-product-right-sidebar">
                    <div class="slider-right zoom-img">
                        <a href="#"><img class="img-responsive" src="{{$product->image?''.Storage::url ($product->image):''}}"
                                alt="sidebar left" /></a>
                    </div>
                </div>
            </div>
            <!-- SINGLE SIDE BAR END -->
        </div>
    </div>
</section>
@endsection