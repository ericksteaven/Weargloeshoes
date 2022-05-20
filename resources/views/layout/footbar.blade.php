<style>
	a, a:hover {
		text-decoration: none !important;
	}

	.content {
		height: 70vh;
	}

	.footer-new {
		padding: 7rem 0 2rem;
		background-size: cover;
		background-position: center center;
		background-repeat: no-repeat;
		color: #777;
		position: relative;
		font-family: "Poppins", sans-serif;
	}
	
	.footer-new:before {
		content: "";
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		width: 100%;
		height: 100%;
		background-color: #414141;
	}

	.footer-new h3 {
		font-size: 16px;
		font-weight: bold;
		color: #fff;
		margin-bottom: 30px;
	}

	.footer-new .footer-site-logo {
		font-size: 1.5rem;
		color: #fff;
	}

	.footer-new .nav-links li {
		margin-bottom: 10px;
	}

    .footer-new .nav-links li a {
    	color: #999999;
	}

    .footer-new .nav-links li a:hover {
        color: #fff;
	}

	.footer-new .btn.btn-tertiary {
		background-color: #e42c64;
		color: #fff;
		border-radius: 30px;
		border: none;
		padding: 10px 20px;
	}
  
	.footer-new .social li {
		display: inline-block;
	}

    .footer-new .social li a {
    	color: gray;
    	padding: 7px;
	}
    
	.footer-new .social li a:hover {
    	color: #fff;
	}

  	.footer-new .copyright {
    	border-top: 1px solid #595959;
	}

	.img-wa {
		width: 55px;
	}

	@media (min-width: 768px) and (max-width: 991.98px) {
		.img-wa {
			width: 50px;
		}
	}

	@media (max-width: 767.98px) {
		.img-wa {
			width: 45px;
		}
	}
</style>

<div id="whatsapp" class="fixed-bottom text-right">
    <a href="https://api.whatsapp.com/send?phone=62{{$akunperusahaan->link_whatsapp}}">
		<img src="https://empirefitclub.com/wp-content/uploads/2018/07/whatsapp.svg" class="img-wa mb-4 mr-4">
	</a>
    {{-- <i class="fab fa-whatsapp fa-4x" style="color: green"></i> --}}
</div>

{{-- NewFooter --}}
<footer class="footer-new">
	<div class="container">
		<div class="row">
			<div class="col-md-4 pr-md-5">
				<a href="#" class="footer-site-logo d-block mb-4">GLOESHOES</a>
				<p>Kamu bisa beli produk dari GLOESHOES Online dengan aman & mudah sekarang. </p>
			</div>
			<div class="col-md-2">
				<h3>Discover</h3>
				<ul class="list-unstyled nav-links">
					<li><a href="/shoes">Shop All</a></li>
					<li><a href="/new_arrival">New Arrivals</a></li>
					<li><a href="/aboutus">About Us</a></li>
				</ul>
			</div>
			<div class="col-md">
				<h3>Follow Us</h3>
				<ul class="social list-unstyled">
					<li><a href="{{$akunperusahaan->link_facebook}}"><i class="bi bi-facebook"></i></a></li>
					<li><a href="{{$akunperusahaan->link_instagram}}"><i class="bi bi-instagram"></i></a></li>
					<li><a href="{{$akunperusahaan->link_shopee}}"><img src="{{asset('/images/logo/shopee.png') }}" style="width: 24px" alt=""></span></a></li>
				</ul>
			</div>
		</div> 
		<div class="row ">
			<div class="col-12 text-center">
				<div class="copyright mt-5 pt-5">
					<p><small>Copyright © {{now()->year}} Weargloeshoes All Rights Reserved</small></p>
				</div>
			</div>
		</div> 
	</div>
</footer>
{{-- EndNewFooter --}}