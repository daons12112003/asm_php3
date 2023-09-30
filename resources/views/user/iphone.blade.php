@extends('user.client')
@section('content')
<section class="main-content-section">
    <div class="container">
        <!-- BSTORE-BREADCRUMB START -->
        <div class="bstore-breadcrumb">
            <a href="{{route('home')}}">HOME</a>
            <span><i class="fa fa-caret-right"></i></span>
            <span>Danh Mục</span>
        </div>
        <!-- BSTORE-BREADCRUMB END -->

        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="right-all-product">
                    <!-- PRODUCT-CATEGORY-HEADER START -->
                    <div class="product-category-header">
                        <div class="category-header-image">
                            <img src="assets/images/product/banner.jpg" alt="category-header" />
                            
                        </div>
                    </div>
                    <!-- PRODUCT-CATEGORY-HEADER END -->
                    <div class="product-category-title">
                        <!-- PRODUCT-CATEGORY-TITLE START -->
                        <h1>
                            <span class="cat-name">Women</span>
                            <span class="count-product">There are 13 products.</span>
                        </h1>
                        <!-- PRODUCT-CATEGORY-TITLE END -->
                    </div>
                    <div class="product-shooting-area">

                        <div class="product-shooting-bar">
                            <!-- SHOORT-BY START -->
                            <div class="shoort-by">
                                <label for="productShort">Sort by</label>
                                <div class="short-select-option">
                                    <select name="sortby" id="productShort">
                                        <option value="">--</option>
                                        <option value="">Price: Lowest first</option>
                                        <option value="">Price: Highest first</option>
                                        <option value="">Product Name: A to Z</option>
                                        <option value="">Product Name: Z to A</option>
                                        <option value="">In stock</option>
                                        <option value="">Reference: Lowest first</option>
                                        <option value="">Reference: Highest first</option>
                                    </select>
                                </div>
                            </div>
                            <!-- SHOORT-BY END -->
                            <!-- SHOW-PAGE START -->
                            <div class="show-page">
                                <label for="perPage">Show</label>
                                <div class="s-page-select-option">
                                    <select name="show" id="perPage">
                                        <option value="">11</option>
                                        <option value="">12</option>
                                    </select>
                                </div>
                                <span>per page</span>
                            </div>
                            <!-- SHOW-PAGE END -->
                            <!-- VIEW-SYSTEAM START -->
                            <div class="view-systeam">
                                <label for="perPage">View:</label>
                                <ul>
                                    <li class="active"><a href="shop-gird.html"><i class="fa fa-th-large"></i></a><br />Grid</li>
                                    <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a><br />List</li>
                                </ul>
                            </div>
                            <!-- VIEW-SYSTEAM END -->
                        </div>

                        <!-- PRODUCT-SHOOTING-RESULT START -->
                        <div class="product-shooting-result">
                            <form action="#">
                                <button class="btn compare-button">
                                    Compare (<span class="compare-value">1</span>)
                                    <i class="fa fa-chevron-right"></i>
                                </button>
                            </form>
                            <div class="showing-item">
                                <span>Showing 1 - 12 of 13 items</span>
                            </div>
                            <div class="showing-next-prev">
                                <ul class="pagination-bar">
                                    <li class="disabled">
                                        <a href="#"><i class="fa fa-chevron-left"></i>Previous</a>
                                    </li>
                                    <li class="active">
                                        <span><a class="pagi-num" href="#">1</a></span>
                                    </li>
                                    <li>
                                        <span><a class="pagi-num" href="#">2</a></span>
                                    </li>
                                    <li>
                                        <a href="#">Next<i class="fa fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                                <form action="#">
                                    <button class="btn showall-button">Show all</button>
                                </form>
                            </div>
                        </div>
                        <!-- PRODUCT-SHOOTING-RESULT END -->

                    </div>
                </div>
                <!-- ALL GATEGORY-PRODUCT START -->
                <div class="all-gategory-product">
                   
                    <div class="row gategory-product">
                        <!-- SINGLE ITEM START -->
                       
                         @foreach ($products as $product)
                        <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                            
                           
                            <div class="gategory-product-list">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="{{ route('route_detail', ['id' => $product->id]) }}"><img src="{{ $product->image?''.Storage::url($product->image):''}}"
                                                alt="product-image" /></a>
                                        <a href="single-product.html" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{route('cart_add', ['phone_id' => $product->id])}}" title="Quick view"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                </li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
                                                </li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
                                                </li>
                                            </ul>
                                        </div>
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
                                        <a href="single-product.html">{{$product->name}}</a>
                                        <div class="price-box">
                                            <span class="price">{{$product->price}} VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                        
                        <!-- SINGLE ITEM END -->
                        <!-- SINGLE ITEM START -->
                       
                    </div>
               
                </div>
                <!-- ALL GATEGORY-PRODUCT END -->
                <!-- PRODUCT-SHOOTING-RESULT START -->
                <div class="product-shooting-result product-shooting-result-border">
                    <form action="#">
                        <button class="btn compare-button">
                            Compare (<strong class="compare-value">1</strong>)
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </form>
                    <div class="showing-item">
                        <span>Showing 1 - 12 of 13 items</span>
                    </div>
                    <div class="showing-next-prev">
                        <ul class="pagination-bar">
                            <li class="disabled">
                                <a href="#"><i class="fa fa-chevron-left"></i>Previous</a>
                            </li>
                            <li class="active">
                                <span><a class="pagi-num" href="#">1</a></span>
                            </li>
                            <li>
                                <span><a class="pagi-num" href="#">2</a></span>
                            </li>
                            <li>
                                <a href="#">Next<i class="fa fa-chevron-right"></i></a>
                            </li>
                        </ul>
                        <form action="#">
                            <button class="btn showall-button">Show all</button>
                        </form>
                    </div>
                </div>
                <!-- PRODUCT-SHOOTING-RESULT END -->
            </div>
            <div class="col-lg-3">
                <!-- PRODUCT-LEFT-SIDEBAR START -->
                <div class="product-left-sidebar">
                    <h2 class="left-title pro-g-page-title">Catalog</h2>
                    <!-- SINGLE SIDEBAR ENABLED FILTERS START -->
                    <div class="product-single-sidebar">
                        <span class="sidebar-title">ENABLED FILTERS:</span>
                        <ul class="filtering-menu">
                            <li>
                                Categories: Dresses
                                <a href="#"><i class="fa fa-remove"></i></a>
                            </li>
                            <li>
                                Avaiale: In stock
                                <a href="#"><i class="fa fa-remove"></i></a>
                            </li>
                            <li>
                                Categories: Dresses
                                <a href="#"><i class="fa fa-remove"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- SINGLE SIDEBAR ENABLED FILTERS END -->
                    <!-- SINGLE SIDEBAR CATEGORIES START -->
                    <div class="product-single-sidebar">
                        <span class="sidebar-title">Categories</span>
                        <ul>
                            <li>
                                <label class="cheker">
                                    <input type="checkbox" name="categories" />
                                    <span></span>
                                </label>
                                <a href="#">Tops<span> (12)</span></a>
                            </li>
                            <li>
                                <label class="cheker">
                                    <input type="checkbox" name="categories" />
                                    <span></span>
                                </label>
                                <a href="#">Dresses<span> (13)</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- SINGLE SIDEBAR CATEGORIES END -->
                    <!-- SINGLE SIDEBAR AVAILABILITY START -->
                    <div class="product-single-sidebar">
                        <span class="sidebar-title">Availability</span>
                        <ul>
                            <li>
                                <label class="cheker">
                                    <input type="checkbox" name="availability" />
                                    <span></span>
                                </label>
                                <a href="#">In stock<span> (13)</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- SINGLE SIDEBAR AVAILABILITY END -->
                    <!-- SINGLE SIDEBAR CONDITION START -->
                    <div class="product-single-sidebar">
                        <span class="sidebar-title">Condition</span>
                        <ul>
                            <li>
                                <label class="cheker">
                                    <input type="checkbox" name="condition" />
                                    <span></span>
                                </label>
                                <a href="#">new<span> (13)</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- SINGLE SIDEBAR CONDITION END -->
                    <!-- SINGLE SIDEBAR MANUFACTURER START -->
                    <div class="product-single-sidebar">
                        <span class="sidebar-title">Manufacturer</span>
                        <ul>
                            <li>
                                <label class="cheker">
                                    <input type="checkbox" name="manufacturer" />
                                    <span></span>
                                </label>
                                <a href="#">Fashion Manufacturer<span> (13)</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- SINGLE SIDEBAR MANUFACTURER END -->
                    <!-- SINGLE SIDEBAR PRICE START -->
                    <div class="product-single-sidebar">
                        <span class="sidebar-title">Price</span>
                        <ul>
                            <li>
                                <label><strong>Range:</strong><input type="text" id="slidevalue" /></label>
                            </li>
                            <li>
                                <div id="price-range"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- SINGLE SIDEBAR PRICE END -->
                    <!-- SINGLE SIDEBAR SIZE START -->
                   
                <!-- SINGLE SIDEBAR TAG END -->
            </div>
        </div>
    </div>
</section>
@endsection
