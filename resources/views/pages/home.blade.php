@extends('layout.template')

@section('style')
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">

	<style>
		/* body {
			font-family: 'Roboto-Light', sans-serif;
			background-color: #BFBEBE;
		} */

		section#home{
			background-color: #BFBEBE;
			font-family: 'Roboto-Light', sans-serif;
		}

		body{
			overflow-x: hidden; !important
		}
	</style>

	<style>
		#swiper .swiper-container {
			width: 100%;
			/* height: 85vh; */
		}

		#swiper .swiper-slide {
			text-align: center;
			font-size: 18px;
			/* background: #fff; */

			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
			width: 100%;
			/* height: 77vh; */
		}

		#swiper .swiper-slide img {
			display: block;
			max-width: 100%;
			max-height: 100%;
			object-fit: fill;
		}
		
		@media (min-width: 576px) and (max-width: 767.98px){
			#swiper .swiper-slide {
				width: 100%;
				height: 20vh !important;
			}

			/* #swiper .swiper-container {
				height: 30vh;
			} */
		}
		/* swiper */

		.kotak {
			border: 1px solid greenyellow;
			padding: 0;
			height: 400px;
		}

		#new-arrival .container {
			margin: 40px auto 100px;
		}
		
		#new-arrival .display-6 {
			text-align: center;
			font-size: 25px;
		}
		
		#new-arrival .container-card {
			padding-top: 50px;
			margin: 0px -80px;
		}

		#new-arrival .new-arr-content img{
			object-fit: cover;
			height: 100%;
			object-position: center;
		}

		#new-arrival .new-arr-content-desc{
			margin-top: 17px;
		}

		#new-arrival .new-arr-content-desc p.jdl{
			text-align: center;
			font-size: 17px;
		}

		#new-arrival .new-arr-content-desc p.price{
			text-align: center;
			font-size: 15px;
			margin-top: -12px;
			font-weight: 500;
			color: #c0b6a7;
		}

		#new-arrival .button-animate, footer button{
			border: 1px solid white;
			position: relative;
			transition: all .35s;
			background-color: white;
			padding: 10px 45px;
			font-weight: 300;
			font-size: 1.1rem
		}
		#new-arrival .view-all-product{
			left: 50%;
			margin-top:30px; 
			transform: translateX(-50%);
		}

		#new-arrival .button-animate span, footer button span{
			position: relative;
			z-index: 2;
		}

		#new-arrival .button-animate:after, footer button:after{
			position: absolute;
			content: "";
			top: 0;
			left: 0;
			width: 0;
			height: 100%;
			background: #f8f4f1;
			transition: all .35s;
		}

		#new-arrival .button-animate:hover:after, footer button:hover:after{
			width: 100%;
		}

		#new-arrival .card-img-overlay{
			top: 68%;
			left: 10%;
		}

		#new-arrival .card .fade-2{
			position: absolute;
			opacity: 0;
			top: 0;
			left: 0;
			z-index: 99;
			transition: 0.5s;
		}

		#new-arrival .card:hover .fade-2 {
			opacity: 1;
		}

		#new-arrival .card{ 
			height: 400px;
		}

		#new-arrival .card .card-ktgr {
			object-fit: cover;
			object-position: center;
			width: 100%;
			height: 100%;
		}

		#feed .container-feed{
			margin-top: 80px;
			padding-bottom: 80px;
			margin-bottom: -80px;
		}

		#feed .display-6{
			text-align: center;
			font-size: 25px;
		}

		#feed .image img{
			/* margin-top: 10px; */
			/* width: 24.5vw;
			height: 24.5vw; */
			max-height: 320px;
		}

		@media (min-width: 1400px) {
			#feed .image img{
				max-height: 320px;
			}
		}

		@media (max-width: 1399.98px) and (min-width: 1200px) {
			#feed .image img{
				max-height: 275px;
			}
		}

		@media (max-width: 1199.98px) and (min-width: 992px) {
			#feed .image img{
				max-height: 230px;
			}
		}

		@media (max-width: 991.98px) and (min-width: 768px) {
			#feed .image img{
				max-height: 350px;
			}
		}

		@media (max-width: 767.98px) and (min-width: 576px) {
			#feed .image img{
				max-height: 530px;
			}
		}

		@media (max-width: 575.98px) {
			#feed .image img{
				max-height: none;
				height: auto;
			}
		}

		#feed .col-feed{
			padding: 0px;
		}

		#feed .image{
			padding: 0px;
			/* width: 24.5vw;
			height: 24.5vw; */
		}

		#feed .black-hover{
			margin-top: 10px;
			background-color: black;
			opacity: 0;
			top: 0px;
			width: 24.5vw;
			height: 24.5vw;
			position: absolute;
			transition: 0.3s;
		}

		#feed .black-hover:hover{
			opacity: 0.4; 
		}
	</style>

	<style>
		#product .container{
			border: 8px solid white;
			background-color: #BFBEBE;
		}

		/* #product .image{
			margin-left: 100px;
		}

		#product .image img{
			width: 450px;
		} */

		#product .image{
			width: 450px;
		}

		@media (min-width: 768px) and (max-width: 991.98px) {
			#product .image{
				width: 550px;
			}
		}

		@media (max-width: 767.98px) {
			#product .image{
				width: 400px;
			}
		}

		#product .display-6 {
			text-align: center;
			font-weight: 400;
			font-size: 20px;
		}

		.product__description h1{
			font-size: 18px;
			text-transform: uppercase;
			font-weight: 400;
			color: #1c1b1b;
		}

		.product__description h2{
			font-size: 16px;
			text-transform: uppercase;
			font-weight: 400;
			color: #1c1b1b;
		}

		/* .product__description h3{
			font-size: 16px;
			text-transform: uppercase;
			font-weight: 400;
			color: black;
		} */

		.product__description h3#price{
			font-size: 16px;
			/* text-transform: uppercase; */
			font-weight: 400;
			color: black;
		}

		.product__description h3#afterprice{
			font-size: 16px;
			/* text-transform: uppercase; */
			font-weight: 400;
			color: red;
		}

		.product__size .btn-primary{
			width: 93%;
			font-size: 14px;
			border: 1px solid #d1d1d1;
			margin-bottom: 20px;
			padding: 10px 0;
			background-color: transparent;
			color: #1c1b1b;
		}

		.product__size-chart{
			position: relative;
		}

		.product__size-chart p{
			position: absolute;
			right: 50px;
			color: #6a6a6a;
			border-bottom: 1px solid #6a6a6a;
		}

		.product__size{
			font-size: 14px;
			padding: 10px 0;
			margin-bottom: 30px;
		}

		.product__size--table h1{
			font-size: 14px;
			font-weight: 400;
			display: inline;
			margin-right: 16px;
			padding: 10px 12px;
			border: 1px solid #6a6a6a;
			color: #6a6a6a;
		}
	</style>

	<style>
		#about-us .container{
			border: 8px solid white;
			background-color: #BFBEBE;
		}

		#about-us .container h1{
			text-align: center;
			margin: 50px 0px;
			font-size: 20px;
		}

		@media (min-width: 768.98px) {
			#about-us .container p {
				/* text-align: justify; */
				margin: 0px 254px 80px!important;
				font-size: 20px;
			}
		}

		@media (min-width: 576px) and (max-width: 768px){
			#about-us .container p {
				/* text-align: justify; */
				font-size: 18px;
			}
		}
	</style>

	<style>
		#article .container-feed{
			margin-top: 80px;
			padding-bottom: 80px;
			margin-bottom: -80px;
		}

		#article .display-6{
			text-align: center;
			font-size: 25px;
			margin-left: auto;
			margin-right: auto;
			padding-top: 50px;
		}

		#article .image img{
			margin-top: 10px;
			/* width: 24.5vw; */
			/* height: 24.5vw; */
			/* max-width: ; */
		}

		#article .col-feed{
			padding: 0px;
		}

		#article .image{
			padding: 0px;
			width: 24.5vw;
			height: auto;
			max-width: ;
		}
		
		#article .black-hover{
			margin-top: 10px;
			background-color: black;
			opacity: 0;
			top: 0px;
			width: 24.5vw;
			height: 24.5vw;
			position: absolute;
			transition: 0.3s;
		}

		#article .black-hover:hover{
			opacity: 0.4; 
		}

		#article .article-content img{
			object-fit: cover;
			height: 100%;
			object-position: center;
		}

		#article .article-content-desc{
			/* margin-top: 17px; */
		}

		#article .article-content-desc p.jdl{
			text-align: center;
			font-size: 17px;
		}

		#article .button-animate, footer button{
			border: 1px solid white;
			position: relative;
			transition: all .35s;
			background-color: white;
			padding: 10px 45px;
			font-weight: 300;
			font-size: 1.1rem
		}

		#article .button-animate span, footer button span{
			position: relative;
			z-index: 2;
		}

		#article .button-animate:after, footer button:after{
			position: absolute;
			content: "";
			top: 0;
			left: 0;
			width: 0;
			height: 100%;
			background: #f8f4f1;
			transition: all .35s;
		}

		#article .button-animate:hover:after, footer button:hover:after{
			width: 100%;
		}

		#article .view-all-article{
			text-align: center;
			left: 50%;
			margin-top:30px; 
			transform: translateX(-50%);
		}

		@media (min-width: 576px) and (max-width: 768px){
			#article .image{
			padding: 0px;
			width: 100%;
			height: 100%;
		}
		}

	</style>
@endsection

@section('content')
	<section id="home">
		@if(Session::has('emailsent'))
				<!-- Button trigger modal -->
				<button type="hidden" id="modal" class="d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Launch demo modal
				</button>
				
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
					<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Link Reset Email berhasil dikirim</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							{{session('emailsent')}}
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
					</div>
				</div>
		@endif
		@if(Session::has('emailnotsent'))
				<!-- Button trigger modal -->
				<button type="hidden" id="modal" class="d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Launch demo modal
				</button>
				
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
					<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Link Reset Email gagal dikirim</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							{{session('emailnotsent')}}
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
					</div>
				</div>
		@endif
		<section id="swiper" class="w-100 splide">
			<div class="swiper-container mySwiper splide__track">
				<div class="swiper-wrapper splide__list">
					@foreach ($events as $event1)
						<div class="swiper-slide splide__slide" data-splide-interval="5000">
							<a href="{{$event1->link}}"><img src="{{asset('/images/event/'.$event1->image_event) }}" alt=""></a>
						</div>
					@endforeach
				</div>
				<div class="swiper-pagination"></div>
			</div>
		
			<!-- Swiper JS -->
			<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

			<!-- Initialize Swiper -->
			{{-- <script>
				// var swiper = new Swiper(".mySwiper", {
				// 	pagination: {
				// 		el: ".swiper-pagination",
				// 		dynamicBullets: true,
				// 	},
				// });
				var mySwiper = new Swiper ('.mySwiper', {
					speed: 1000,
					direction: 'horizontal',
					zoom: true,
					loop: true,
					pagination: {
						el: '.swiper-pagination',
						dynamicBullets: true,
					},
					keyboard: {
						enabled: true,
						onlyInViewport: false,
					},
					// mousewheel: 
					// {
					//   invert: true,
					// },
					autoplay: {
						delay: 4000,
					}
				}); 
			</script> --}}

			<!-- Splide JS -->
			<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
			<script>
				var splide = new Splide('.splide', {
					type: 'loop',
					focus: 'center',
					perPage: 1,
					arrows: 'slider',
					lazyLoad: 'nearby',
					speed: 1000,
					pauseOnHover: false,
					autoplay: true
				});

				splide.mount();
			</script>
		
			
		</section>

		<section id="about-us">
			<div class="container mt-5">
				<h1 class="judul">ABOUT US</h1>
				<p class="mx-5 mb-5 text-justify">{!! $accounts->description_company !!}</p>
			</div>
		</section>
		
		<section id="new-arrival">
			<div class="container">
				<div class="row">
					<div class="col-10 mx-auto col-sm-6 text-center">
						<h1 class="text-capitalize display-6 mb-5">
							New Arrivals
						</h1>
					</div>
				</div>
				{{-- <h3 class="display-6">New Arrivals</h3> --}}
				<div class="row">
					@foreach ($new_arrivals as $new_arrival)
					<div class="col-xl-3 col-lg-4 col-sm-6 col-12 d-flex justify-content-center align-items-center">
						<div class="new-arr-content" style="width: 18rem;">
							<a href="/detailproduct/{{$new_arrival->id}}">
								<div class="card">
									<img src="{{asset('/images/product/imageproduct/'.$new_arrival->product_image) }}" class=" fade-1" alt="...">
									{{-- <img src="{{asset('/images/image5.jpg') }}" class="card-img-top fade-2" alt="..."> --}}
								</div>
							</a>
							<div class="new-arr-content-desc">
								<a href="/detailproduct/{{$new_arrival->id}}" style="text-decoration: none; color: black">
									<p class="jdl" >{{$new_arrival->product_name}} | {{$new_arrival->colour}}</p>
								</a>
								{{-- Rp. {{ number_format($p->price, 0) }} --}}
								{{-- <p class="price">Rp. {{ number_format($new_arrival->price, 0, ',', '.') }}</p>
								<p class="price" style="color:red">Rp. 300.000</p>
								<p class="price">({{$new_arrival->discount}}% Off)</p> --}}
							</div>
						</div>
						{{-- <div class="product-top mb-5 mt-3">
							<div class="card single-item">
								<a href="/detailproduct/{{$new_arrival->id}}">
									<div class="img-container">
										<img src="{{asset('/images/'.$new_arrival->product_image) }}" alt="" class="card-img-top product-img" />
									</div>
								</a>
								<div class="overlay-left">
									<button type="button" class="btn btn-secondary" title="Quick Shop" data-toggle="modal" data-target="#previewimage{{$new_arrival->id}}"><i class="fa fa-eye" ></i></button>
								</div>
								<div class="overlay-right d-flex justify-content-end">
									@if ($orders->where("user_name", session('user'))->where('product_id',($new_arrival->id))->isEmpty())
										<a  href="/wishlist/{{$new_arrival->id}}/{{$new_arrival->product_image}}">       
											<button onclick="showAlertAddWishlist()" type="button" class="btn btn-secondary " title="Quick Shop">
												<i class="fa fa-heart-o"></i>
											</button>
										</a>
									@else
									<a  href="/wishlist/delete/{{$new_arrival->id}}">     
										<button onclick="showAlertDeleteWishlist()" type="button" class="btn btn-secondary " title="Quick Shop">
												<i class="fa fa-heart"></i> 
										</button>
									</a>
									@endif
								</div>
								<a href="/detailproduct/{{$new_arrival->id}}">
									<div class="card-body">
										<div class="card-text d-flex justify-content-between text-capitalize">
											<h5 id="item-name">{{$new_arrival->product_name}} - ID : {{$new_arrival->id}}</h5>
											<span><i class="fas fa-dollar-sign">5</i></span>
										</div>
									</div>
			
									<div class="product-bottom ml-3">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fas fa-star-half"></i>
									</div>
								</a>
							</div>
						</div> --}}
					</div>
					@endforeach
				</div>
				<a href="/new_arrival" style="text-decoration: none; color: black">
					<button type="button" class="view-all-product button-animate mb-5"> <span> View all products </span> </button>
				</a>
				<div class="row">
					@foreach ($ktgr as $item)
					{{-- <div class="row">
					<div class="col kotak kotak1">
					<img src="{{asset('/images/post/'.$item->image) }}" class="card-img card-ktgr img-fluid" alt="...">
					{{-- <img src="./images/amy-shamblen-Vq1sd62o0us-unsplash.jpg" alt="" /> --}}
					<div class="col-lg-4 col-md-6 col-12">
						<div class="card bg-dark text-white mt-2 mb-4">
							<img src="{{asset('/images/post/'.$item->image) }}" class="card-img card-ktgr img-fluid" alt="...">
							<div class="card-img-overlay">
								<h3 class="card-title">{{$item->post_title}}</h3>
								<a type="button" href='/shoes/{{$item->post_title}}' style="text-decoration: none; color: black;" class="button-animate"> <span> View all products </span> </a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		
		<section id="product">
			<div class="container">
				<h3 class="display-6 my-5">FEATURED PRODUCT</h3>
				<div class="row mb-5">
					<div class="col-lg-6 col-12">  
						<a href="/detailproduct/{{$featured->id}}">
							<div class="d-flex justify-content-center align-items-center">
								<img src="{{asset('/images/product/imageproduct/'.$featured->product_image) }}" alt="" class="image">
							</div>
						</a>
					</div>
					<div class="product__description col-lg-6 col-12">
						<div class="px-5 px-lg-0 mt-4 mt-md-5 mt-lg-0">
							<h1 class="py-2">{{$featured->product_name}}</h1>
							<h2 class="py-2">{{$featured->colour}}</h2>
							{{-- <h3 class="py-2">Rp. {{ number_format($featured->price, 0, ',', '.') }}</h3> --}}
							{{-- <h3 class="py-2" style="color:red">Rp. 300.000</h3> --}}
							{{-- <h2 class="py-2">({{$featured->discount}}% Off)</h2> --}}

							@if($featured->discount == null)
							<h3 id="price" class="py-2">Rp. {{ number_format($featured->price, 0, ',', '.') }}</h3>
							@else
							<h3 id="price" class="py-2" style="text-decoration: line-through">Rp. {{ number_format($featured->price, 0, ',', '.') }}</h3>
							<h3 id="afterprice" class="py-2">Rp. {{number_format($featured->price-($featured->price*($featured->discount/100)), 0, ',', '.')}}</h3>
							<h2 class="py-2">({{$featured->discount}}% Off)</h2>
							@endif

							{{-- <h2 class="py-2">2 OTHER AVAILABLE OPTIONS</h2> --}}
							{{-- @foreach ($featureds as $item)
							<a href="/detailproduct/{{$item->id}}">
							
							<img src="{{asset('/images/'.$item->product_image) }}" class="img-thumbnail mb-3" width="64px" alt="...">     
							</a>
							
							@endforeach --}}
							{{-- <div class="row product__size">
								<div class="col-6">
									<p>Size: </p>
								</div>
								<div class="col-6 product__size-chart">
									<a href="#"><p>Size chart</p></a>
								</div>
					
								<div class="product__size--table">
									<h1>36</h1>
									<h1>37</h1>
									<h1>38</h1>
									<h1>39</h1>
									<h1>40</h1>
								</div>
							</div> --}}

							<div class="row product__size">
								{{-- <div class="col-6">
									<p>Size: </p>
								</div> --}}

								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
									Size chart
								</button>
								{{-- <div class="col-6 product__size-chart">
									<a href="#"><p>Size chart</p></a>
								</div> --}}

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Size chart</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body text-center">
												<img src="{{asset('/images/detailproduct/size cart.jpeg') }}" class="w-100" alt="">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											{{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
											</div>
										</div>
									</div>
								</div>

								{{-- <div class="product__size--table">
									<h1>36</h1>
									<h1>37</h1>
									<h1>38</h1>
									<h1>39</h1>
									<h1>40</h1>
								</div> --}}
							</div>
					
							{{-- <div class="product__button">
								<button type="button" class="product__button--primary"> <span> ADD TO CART </span> </button>
								<button type="button"> <i class="bi bi-suit-heart me-2"></i>Add To Wishlist </button>
							</div> --}}
							<a href="/detailproduct/{{$featured->id}}" style="color: black">View product details</a>
						</div>
					</div> 
				</div>
			</div>
		</section>

		<section id="article">
			<div class="container-article container">
				<h3 class="display-6">ARTICLE</h3>
				<div class="row mt-5">
					@foreach ($articles as $article1)
					<div class="col-lg-3 col-md-6 col-12">
						<div class="w-100">
							<a href="/pages/article/detailarticle/{{$article1->id}}">
								<div class="image w-100">
									<img src="{{asset('/images/article/'.$article1->image_article) }}" class="img-thumbnail mb-3" alt="...">     
								</div>
							</a>
						</div>
						<div class="article-content-desc">
							<a href="/pages/article/detailarticle/{{$article1->id}}" style="text-decoration: none; color: black">
								<p class="jdl" >{{$article1->title}}</p>
							</a>
						</div>
					</div>

					@endforeach
					<a href="/pages/article/article" style="text-decoration: none; color: black">
						<button type="button" class="view-all-article button-animate"> <span> View all articles </span> </button>
					</a>
				</div>
			</div>
		</section>

		<section id="feed">
			<div class="container-feed container">
				<h3 class="display-6">FROM OUR FEED</h3>
				<div class="row my-5">
					@foreach ($feeds as $feed1)
					<div class="col-lg-3 col-md-6 col-12 col-feed">
						<a href="{{$feed1->link}}">
							<div class="image w-100">
								<img src="{{asset('/images/feed/'.$feed1->image_feed) }}" class="img-thumbnail w-100" alt="...">     
								{{-- <img src="{{asset('/images/1607185632.jpg') }}" alt=""> --}}
								{{-- <div class="black-hover"></div> --}}
							</div>
						</a>
					</div>
					@endforeach
			
					{{-- <div class="col-3 ">
					<a href="">
						<div class="image">
						<img src="{{asset('/images/1607185632.jpg') }}" alt="">
						<div class="black-hover"></div>
						</div>
					</a>
					</div>
					<div class="col-3 ">
					<a href="">
						<div class="image">
						<img src="{{asset('/images/1607185632.jpg') }}" alt="">
						<div class="black-hover"></div>
						</div>
					</a>
					</div>
					<div class="col-3 ">
					<a href="">
						<div class="image">
						<img src="{{asset('/images/1607185632.jpg') }}" alt="">
						<div class="black-hover"></div>
						</div>
					</a>
					</div>
					<div class="col-3 ">
					<a href="">
						<div class="image">
						<img src="{{asset('/images/1607185632.jpg') }}" alt="">
						<div class="black-hover"></div>
						</div>
					</a>
					</div>
					<div class="col-3 ">
					<a href="">
						<div class="image">
						<img src="{{asset('/images/1607185632.jpg') }}" alt="">
						<div class="black-hover"></div>
						</div>
					</a>
					</div>
					<div class="col-3 ">
					<a href="">
						<div class="image">
						<img src="{{asset('/images/1607185632.jpg') }}" alt="">
						<div class="black-hover"></div>
						</div>
					</a>
					</div>
					<div class="col-3 ">
					<a href="">
						<div class="image">
						<img src="{{asset('/images/1607185632.jpg') }}" alt="">
						<div class="black-hover"></div>
						</div>
					</a>
					</div> --}}
				</div>
			</div>
		</section>
	</section>
@endsection