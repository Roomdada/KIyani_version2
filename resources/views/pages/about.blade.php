@extends('layouts.app')

@section('title', 'About')

@section('content')
	<section>
		<div class="sub-header sub-header-1 sub-header-about fake-position">
			<div class="sub-header-content">
				<h2 class="text-cap white-text">
				  KIYANI DESIGN SOLUTIONS
				</h2>
				<ol class="breadcrumb breadcrumb-arc text-cap">
					<li>
						<a href="{{ route('path_home') }}">Home</a>
					</li>
					<li class="active">About</li>
				</ol>
			</div>
		</div>
	</section>
	<!-- End Section Sub Header -->
	
<section class="padding padding-bottom-0">
					<div class="container">
						<div class="row">
							<div class="about-intro">
								<div class="about-intro-img">
									<img src="{{asset('pp.jpg')}}" class="img-responsive" alt="Image">
								
								</div>
								<div class="about-intro-text">
									<h2 class="text-cap"><b>Aicha Touré</b></h2>
								    <h4><strong>My story</strong></h4>	
									<p>Kiyani Design Solutions was founded by designer: Aicha Touré, who originally from west Africa (cote d'ivoire). KIYANI means beautiful & clever. The company origiated from modest beginnings in Alexandria VA (as kiyani Decors Solutions LLC), but our drive and will to achieve positive change have allowed us to grow into the international Design Studio & Home Goods Store we are today. It's not just about offering recycled furniture and soccialy responsible products. We strive to inform and inspire the global community to embrace a unique panafrican lifestyle.</p>
									<p><strong>Ideas & Creative.</strong> Nam nec posuere odio. Phasellus quam mi, aliquam sit amet accumsan non, tempor non massa. Mauris tristique facilisis molestie. Donec et imperdiet arcu. Aliquam erat volutpat. Morbi enim tellus, volutpat vel imperdiet sed, efficitur non diam. Etiam dignissim elit nec orci rutrum facilisis. Ut id elit consectetur, interdum est sit amet, dictum magna.</p>
									<div class="clearfix mgb20"></div>
								</div>
							</div>
						</div>
					</div>
				</section>	
	<!-- End Section About Intro 1-->

	<section class="padding padding-bottom-0">
		<div class="container">
			<div class="row">
				<div class="about-intro">
					<div class="about-intro-text">
						<h2 class="text-cap">ETHOS</h2>
						<h3>Creating Beautiful & Intelligent Designs</h3>
						<h4><strong>MADE IN COTE D'IVOIRE</strong></h4>
						<p>Kiyani Design is committed to design ready to wear, as well as custom-made furnitures with a international standart quality. Working alongside local artisans from CI help us achieve unique panafrican design techniques. Clever designing is a key factor in KIyani's lifestyle</p>
						<h3>Kiyani Design's moto</h3>
						<p><strong>At Kiyani Design Solutions</strong>, we design, structure and shape interior spaces by playing on volume, our materials, furnitures and light, while taking into account the needs of client, our goal is modernize spaces to make them welcoming, confortable and functional for the clients lifestyle, all in an aesthetic way.</p>
						<h3>Nature, our inspiration</h3>
						<p>
							<strong>At Kiyani Design</strong>, committed to selling high quality, natural products which are king to the environment 	and minimize the negative impact to the planet hat is why products used are mostly natural, fiber woods, metals & glass.
						</p>


					</div>
					<div class="about-intro-img">
						<img src="{{ asset('about.jpg') }}" class="img-responsive" alt="Image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section About Intro 2-->
	
	<section class="padding padding-bottom-0">
		<div class="container">
			<div class="row">
				<h2 class="title text-cap">Meet Our Team</h2>
				<div class="divider divider-1">
					<svg class="svg-triangle-icon-container">
					  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
					</svg>
				</div>
				<!-- End Title -->
				<div class="ourteam-warp ourteam-3-col">
		              <div class="customNavigation">
		                <a class="btn prev-team"><i class="fa fa-angle-left"></i></a>
		                <a class="btn next-team"><i class="fa fa-angle-right"></i></a>
		              </div>  
              		  <div id="owl-team-3-columns" class="owl-carousel owl-theme clearfix">
              		  	@foreach ($team as $value)
			              	<div class="item">
				              	<div class="item-team">
				              		<div class="portrait-member">
					                  	<img src="{{ asset("images/Ourteam/$value->image") }}" class="img-responsive" alt="Image">
				                  	</div>
				                  	<div class="member-info text-center hvr-float-shadow">
					                  	<h5 class="text-cap">{{$value->name}}</h5>
					                  	<p class="member-job">{{$value->post}}</p>
					                  	<div class="social-member">
					                  		<a href="{{$value->social_one}}"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
					                  		<a href="{{$value->social_two}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					                  		<a href="{{$value->social_three}}"><i class="fa fa-behance" aria-hidden="true"></i></a>
					                  	</div>
				                  	</div>
				              	</div>
			              	</div><!-- end item -->
              		  	@endforeach

	          		   </div>
			    </div>
			</div>
		</div>
	</section>
	<!-- End Section Owl Our Team -->

	<section>
		<div class="overlay-arc overlay-3">
        	<div class="layer-1 text-center">
        		<div class="box-content-overlay-3">
        			<h2>We are creative interior design, architecture and<br> decor your space</h2>
        			<a href="{{route('path_contact')}}" class="ot-btn btn-sub-color btn-long text-cap">Work with us</a>
        		</div>
        	</div>
    	</div>
	</section>
	<!-- End Section Overlay -->
@endsection