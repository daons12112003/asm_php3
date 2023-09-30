@extends('user.client')
@section('content')
<section class="main-content-section">
	<div class="container">
		<!-- MAIN-SLIDER-AREA START -->
		<div class="row main-slider-area">
			<!-- SLIDER-AREA START -->
			<div class="col-md-12">
				<div class="slider-area">
					<div id="wrapper">
						<div class="slider-wrapper">
							<div id="mainSlider" class="nivoSlider">
								@foreach($banners as $bn)
								<img src="{{ $bn->image?''.Storage::url($bn->image):''}}" alt="main slider" title="#htmlcaption" />
								@endforeach
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- MAIN-SLIDER-AREA END -->

		<!-- TOW-COLUMN-PRODUCT START -->
		<div class="tow-column-product">
			<div class="row">
				<div class="col-lg-6">
					<!-- NEW-PRODUCT-AREA START -->
					<div class="new-product-area">
						<div class="left-title-area">
							<h2 class="left-title">New Products</h2>
						</div>
						<div class="carousel-wrap ">
							<!-- NEW-PRO-CAROUSEL START -->
							<div class="new-pro-carousel owl-carousel">

								<!-- NEW-PRODUCT-SINGLE-ITEM START -->
								@foreach($phones as $item)
								<div class="single-product-item">

									<div class="product-image">
										<a href="{{ route('route_detail', ['id' => $item->id]) }}">
											<img src="{{$item->image?''.Storage::url ($item->image):''}}" alt="product-image" />
										</a>
										<a href="#" class="new-mark-box">new</a>
										<div class="overlay-content">
											<ul>
												<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
												<li><a href="{{route('cart_add', ['phone_id' => $item->id])}}" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
												<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
												<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product-info">
										<div class="customar-comments-box">
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-empty"></i>
												<i class="fa fa-star-half-empty"></i>
											</div>
											<div class="review-box">
												<span>1 Review (s)</span>
											</div>
										</div>
										<a href="{{ route('route_detail', ['id' => $item->id]) }}">{{ $item->name }}</a>
										<div class="price-box">
											<span class="price">{{$item->price}} VNĐ</span>
										</div>
									</div>

								</div>
								@endforeach


							</div>
							<!-- NEW-PRO-CAROUSEL END -->
						</div>
					</div>
					<!-- NEW-PRODUCT-AREA END -->
				</div>
				<div class="col-lg-6">
					<!-- SALE-PRODUCTS START -->
					<div class="Sale-Products">
						<div class="left-title-area">
							<h2 class="left-title">Sale Products</h2>
						</div>
						<div class="carousel-wrap">
							<!-- SALE-CAROUSEL START -->

							<div class="sale-carousel owl-carousel">
								<!-- SALE-PRODUCTS-SINGLE-ITEM START -->
								@foreach($phones as $item)
								<div class="single-product-item">
									<div class="product-image">
										<a href="{{ route('route_detail', ['id' => $item->id]) }}"><img src="{{$item->image?''.Storage::url ($item->image):''}}" alt="product-image" /></a>
										<a href="#" class="new-mark-box">new</a>
										<div class="overlay-content">
											<ul>
												<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
												<li><a href="{{route('cart_add', ['phone_id' => $item->id])}}" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
												<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
												<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="product-info">
										<div class="customar-comments-box">
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-empty"></i>
												<i class="fa fa-star-half-empty"></i>
											</div>
											<div class="review-box">
												<span>1 Review (s)</span>
											</div>
										</div>
										<a href="{{ route('route_detail', ['id' => $item->id]) }}">{{$item->name}}</a>
										<div class="price-box">
											<span class="price">{{$item->price}} VNĐ</span>
											<span class="old-price">$30.51</span>
										</div>
									</div>
								</div>
								<!-- SALE-PRODUCTS-SINGLE-ITEM END -->
								@endforeach




							</div>
							<!-- SALE-CAROUSEL END -->
						</div>
					</div>
					<!-- SALE-PRODUCTS END -->
				</div>
			</div>
		</div>
		<!-- TOW-COLUMN-PRODUCT END -->

		<!-- ADD-TWO-BY-ONE-COLUMN START -->
		<div class="add-two-by-one-column">
			<div class="row">
				<div class="col-md-8">
					<div class="tow-column-add zoom-img">
						<a href="#"><img src="assets/images/product/banner.jpg" alt="shope-add" /></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="tow-column-add zoom-img">
						<a href="#"><img src="assets/images/product/bn.jpg" alt="shope-add" /></a>
					</div>
				</div>
			</div>
		</div>
		<!-- ADD-TWO-BY-ONE-COLUMN END -->

		<!-- FEATURED-PRODUCTS-AREA START -->
		<div class="featured-products-area">
			<div class="center-title-area">
				<h2 class="center-title">Featured Products</h2>
			</div>

			<div class="carousel-wrap">
				<!-- FEARTURED-CAROUSEL START -->
				<div class="feartured-carousel owl-carousel">

					<!-- SINGLE-PRODUCT-ITEM START -->
					@foreach($phones as $item)
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ route('route_detail', ['id' => $item->id]) }}"><img src="{{$item->image?''.Storage::url ($item->image):''}}" alt="product-image" /></a>
							<a href="#" class="new-mark-box">new</a>
							<div class="overlay-content">
								<ul>
									<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
									</li>
									<li><a href="{{route('cart_add', ['phone_id' => $item->id])}}" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
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
									<span>1 Review (s)</span>
								</div>
							</div>
							<a href="single-product.html">{{$item->name}}</a>
							<div class="price-box">
								<span class="price">{{$item->price}} VNĐ</span>
							</div>
						</div>
					</div>
					<!-- SINGLE-PRODUCT-ITEM END -->
					@endforeach

				</div>
				<!-- FEARTURED-CAROUSEL END -->
			</div>
		</div>
		<!-- FEATURED-PRODUCTS-AREA END -->

		<!-- TAB-BG-PRODUCT-AREA START -->
		<div class="mt-5">

			<!-- TAB PANES START -->
			<a href="#"><img src="assets/images/product/bn4.jpg"  /></a>

		</div>
		<!-- TAB-BG-PRODUCT-AREA END -->

		<!-- BESTSELLER-PRODUCTS-AREA START -->
		<div class="bestseller-products-area">
			<div class="center-title-area">
				<h2 class="center-title">bestseller</h2>
			</div>
			<div class="carousel-wrap">
				<!-- BESTSELLER-CAROUSEL START -->

				<div class="bestseller-carousel owl-carousel">
					@foreach($phones as $item)
					<!-- BESTSELLER-SINGLE-ITEM START -->
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ route('route_detail', ['id' => $item->id]) }}"><img src="{{$item->image?''.Storage::url ($item->image):''}}" alt="product-image" /></a>
							<a href="#" class="new-mark-box">sale!</a>
							<div class="overlay-content">
								<ul>
									<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
									</li>
									<li><a href="{{route('cart_add', ['phone_id' => $item->id])}}" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
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
									<i class="fa fa-star"></i>
								</div>
								<div class="review-box">
									<span>1 Review (s)</span>
								</div>
							</div>
							<a href="single-product.html">{{$item->name}}</a>
							<div class="price-box">
								<span class="price">{{$item->price}} VNĐ</span>
								<span class="old-price">$27.00</span>
							</div>
						</div>
					</div>
					<!-- BESTSELLER-SINGLE-ITEM END -->
					@endforeach

				</div>
				<!-- BESTSELLER-CAROUSEL END -->

			</div>
		</div>
		<!-- BESTSELLER-PRODUCTS-AREA END -->

		<div class="image-add-area">
			<div class="row">

				<div class="col-md-6">
					<!-- ONEHALF-ADD START -->
					<div class="onehalf-add-shope zoom-img">
						<a href="#"><img src="assets/images/product/bn2.jpg" alt="shope-add" /></a>
					</div>
					<!-- ONEHALF-ADD END -->
				</div>

				<div class="col-md-6">
					<!-- ONEHALF-ADD START -->
					<div class="onehalf-add-shope zoom-img">
						<a href="#"><img src="assets/images/product/bn1.jpg" alt="shope-add" /></a>
					</div>
					<!-- ONEHALF-ADD END -->
				</div>

			</div>
		</div>
	</div>
</section>
<!-- MAIN-CONTENT-SECTION END -->

<!-- LATEST-NEWS-AREA START -->
<section class="latest-news-area">
	<div class="container">
		<div class="latest-news-row">
			<div class="center-title-area">
				<h2 class="center-title"><a href="#">latest news</a></h2>
			</div>
			<div class="carousel-wrap">
				<!-- LATEST-NEWS-CAROUSEL START -->
				<div class="latest-news-carousel owl-carousel">

					<!-- LATEST-NEWS-SINGLE-POST START -->
					<div class="single-latest-post">
						<a href="#"><img src="assets/images/latest-news/1.webp" alt="latest-post" /></a>
						<h2><a href="#">What is Lorem Ipsum?</a></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and Type setting
							industry. Lorem Ipsum has been...</p>
						<div class="latest-post-info">
							<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
						</div>
						<div class="read-more">
							<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<!-- LATEST-NEWS-SINGLE-POST END -->

					<!-- LATEST-NEWS-SINGLE-POST START -->
					<div class="single-latest-post">
						<a href="#"><img src="assets/images/latest-news/2.webp" alt="latest-post" /></a>
						<h2><a href="#">Share the Love for printing</a></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and Type setting
							industry. Lorem Ipsum has been...</p>
						<div class="latest-post-info">
							<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
						</div>
						<div class="read-more">
							<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<!-- LATEST-NEWS-SINGLE-POST END -->

					<!-- LATEST-NEWS-SINGLE-POST START -->
					<div class="single-latest-post">
						<a href="#"><img src="assets/images/latest-news/3.webp" alt="latest-post" /></a>
						<h2><a href="#">Answers your Questions P..</a></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and Type setting
							industry. Lorem Ipsum has been...</p>
						<div class="latest-post-info">
							<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
						</div>
						<div class="read-more">
							<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<!-- LATEST-NEWS-SINGLE-POST END -->

					<!-- LATEST-NEWS-SINGLE-POST START -->
					<div class="single-latest-post">
						<a href="#"><img src="assets/images/latest-news/4.webp" alt="latest-post" /></a>
						<h2><a href="#">What is Bootstrap? – History</a></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and Type setting
							industry. Lorem Ipsum has been...</p>
						<div class="latest-post-info">
							<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
						</div>
						<div class="read-more">
							<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<!-- LATEST-NEWS-SINGLE-POST END -->

					<!-- LATEST-NEWS-SINGLE-POST START -->
					<div class="single-latest-post">
						<a href="#"><img src="assets/images/latest-news/5.webp" alt="latest-post" /></a>
						<h2><a href="#">Share the Love for..</a></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and Type setting
							industry. Lorem Ipsum has been...</p>
						<div class="latest-post-info">
							<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
						</div>
						<div class="read-more">
							<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<!-- LATEST-NEWS-SINGLE-POST END -->

					<!-- LATEST-NEWS-SINGLE-POST START -->
					<div class="single-latest-post">
						<a href="#"><img src="assets/images/latest-news/6.webp" alt="latest-post" /></a>
						<h2><a href="#">What is Bootstrap? – The History a..</a></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and Type setting
							industry. Lorem Ipsum has been...</p>
						<div class="latest-post-info">
							<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
						</div>
						<div class="read-more">
							<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<!-- LATEST-NEWS-SINGLE-POST END -->

					<!-- LATEST-NEWS-SINGLE-POST START -->
					<div class="single-latest-post">
						<a href="#"><img src="assets/images/latest-news/3.webp" alt="latest-post" /></a>
						<h2><a href="#">Answers your Questions P..</a></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and Type setting
							industry. Lorem Ipsum has been...</p>
						<div class="latest-post-info">
							<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
						</div>
						<div class="read-more">
							<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<!-- LATEST-NEWS-SINGLE-POST END -->

					<!-- LATEST-NEWS-SINGLE-POST START -->
					<div class="single-latest-post">
						<a href="#"><img src="assets/images/latest-news/4.webp" alt="latest-post" /></a>
						<h2><a href="#">What is Bootstrap? – History</a></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and Type setting
							industry. Lorem Ipsum has been...</p>
						<div class="latest-post-info">
							<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
						</div>
						<div class="read-more">
							<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
					<!-- LATEST-NEWS-SINGLE-POST END -->

				</div>
				<!-- LATEST-NEWS-CAROUSEL START -->
			</div>
		</div>
	</div>
</section>
<!-- LATEST-NEWS-AREA END -->


@endsection