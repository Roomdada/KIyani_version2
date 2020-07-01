<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{config('app.name')}}-@yield('title')</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- Font -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/elegant-font.css') }}">

	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" type="text/css" href="{{asset('revolution/css/navigation.css') }}">
	<!-- OWL CAROUSEL
  	================================================== --> 
  	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
  	<!-- SCROLL BAR MOBILE MENU
		================================================== --> 
		 <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}" />
		
	<!-- Main Style -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- Favicons
	  ================================================== -->
  	<link rel="shortcut icon" href="{{ asset('favicon.png') }}">
</head>
<body>
	<div class="mobile-menu-first ">
    	<div id="mobile-menu" class="mobile-menu">
    		<div class="header-mobile-menu">
              <a href="#">TOTAL: {{Cart::subtotal()}} XOF</a>
              	<div class="mm-toggle">
            		<span aria-hidden="true" class="icon_close"></span>
            	</div> 
          	</div> <!-- Mobile Menu -->
      		<div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
	            <ul>
	                <li><a href="{{ route('path_home') }}"><span>Home</span></a></li>
	          		<li><a href="{{ route('path_portefolio') }}"><span>Projects</span></a></li>
	          		@if (Route::is('path_home'))
	          			<li><a href="#services"><span>Services</span></a></li>
	          		@endif
	               	<li><a href="{{ route('path_about') }}"><span>About </span></a></li>
	                <li><a href="{{ route('path_shop_department') }}"><span>Shop</span></a></li>
	                <li><a href="{{ route('path_contact') }}"><span>Contact Us</span></a></li>
	      		</ul>
              	<div class="footer-mobile-menu">
                  <ul class="social">
                      <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                      <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>

                  <ul class="address-footer-mobile">
                    <li><p> 8th floor, 379 Hudson St, New York, NY 10018</p></li>
                    <li><p>1-800-123-6879 </p></li>
                    <li><p> contact@kiyani.com</p></li>
                    
                  </ul>
              	</div>
      		</div> <!-- /#rmm   -->
    	</div>
    </div><!-- End Mobile Menu -->

	<div class="modal fade modal-search" id="myModal" tabindex="-1" role="dialog"   aria-hidden="true">
	  	<button type="button" class="close" data-dismiss="modal">×</button>
	  	<div class="modal-dialog myModal-search">
        <!-- Modal content-->
        <div class="modal-content">                                        
            <div class="modal-body">
                <form role="search" method="get" class="search-form">
                    <input class="search-field" placeholder="Search here..." value="" title="" type="search">
                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
      </div>
	</div>
	<!-- End Modal Search-->
    <div id="page">
    	<div id="skrollr-body">
			<header id="mainmenu" class="header-v1 header-border header-fix " data-0="padding:10px;padding-left:40px;padding-right:40px;" data-251="padding:10px; padding-left:40px;padding-right:40px;top:0;">
				<div id="info" class="topbar topbar-position topbar-dark hide-topbar" data-0="height:30px" data-251="height:0;">
		    		
					<div class="col-md-12">
						<p class="text-cap hidden-xs">TOTAL: {{Cart::subtotal()}} XOF</p>
	    				<p class="text-cap">E-mail: contact@arc.com</p>
	    				<div class="language">
	    					<a href="#" class="active">EN</a>
	    					<a href="#">FR</a>
	    					<a href="#">PT</a>
	    				</div>
					</div>
		    			
		    	</div>
				<div class="left-header">
					<ul class="navi-level-1">
						<li><a href="index-2.html" class="logo"><img src="{{ asset('images/Header/logo.svg') }}" class="img-responsive" alt="Image" width="80" height="80"></a></li>
					</ul>
				</div><!-- End Left Header -->
				<nav>
					<ul class="navi-level-1 hover-style-2 main-navi">
                        <li><a href="{{ route('path_home') }}"><span>Home</span></a></li>
		          		<li><a href="{{ route('path_portefolio') }}"><span>Projects</span></a></li>
		          		@if (Route::is('path_home'))
		          			<li><a href="#services"><span>Services</span></a></li>
		          		@endif
		               	<li><a href="{{ route('path_about') }}"><span>About </span></a></li>
		                <li><a href="{{ route('path_shop_department') }}"><span>Shop</span></a></li>
		                <li><a href="{{ route('path_contact') }}"><span>Contact Us</span></a></li>
                    </ul>
				</nav><!-- End Nav -->
				<div class="right-header">
					<ul class="navi-level-1 sub-navi seperator-horizonal-line hover-style-4">	
						<li class="header-tel"><a class="tel-header" href="#">TOTAL:{{Cart::subtotal()}} XOF</a></li>
						

	                    <!-- Testing Search Box -->
	                    <li><a href="{{route('path_cart')}}"><span aria-hidden="true" class="icon_bag_alt"></span>[{{Cart::count()}} ]
							</a>
						</li>	
						 <li >
							<a  href="#" data-toggle="modal" data-target="#myModal" id="btn-search" class="reset-btn btn-in-navi"><span aria-hidden="true" class="icon_search"></span></a>
	                    </li>
	                    <li>
	                    	<a href="#/"  class="mm-toggle">
			            		<span aria-hidden="true" class="icon_menu"></span>
			            	</a> 
	                    </li>
					</ul>

				</div><!-- End Right Header -->	
			</header> 
			<!-- End  Header -->

			<!-- Content -->
				@yield('content')
			<!-- End Content -->
           @include('layouts/partials/testimony')
            
			<footer class="footer-v1">
				<div class="footer-left">
					<a href="{{ route('path_home') }}">
						<img src="{{ asset('images/Header/logo.svg') }}" class="img-responsive" alt="Image" width="80" height="80">
					</a>
				</div>
				<!-- End Left Footer -->
				<nav>
					<ul>
						<li>
							<a class="text-cap" href="#">Gallery</a>
						</li>
						<li>
							<a class="text-cap" href="#">Products</a>
						</li>
						<li>
							<a class="text-cap" href="#">News</a>
						</li>
						<li>
							<a class="text-cap" href="#">About</a>
						</li>
						<li>
							<a class="text-cap" href="#">Privacy Policy</a>
						</li>
					</ul>
				</nav>
				<!-- End Nav Footer -->
				<div class="footer-right">
					<ul class="social social-footer">
	                    <li class="facebook active"><a href="#"><i class="fa fa-facebook"></i></a></li>
	                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
	                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
	                    <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
	                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
	                  </ul>
				</div>
				<!-- End Right Footer -->
			</footer>
			<!-- End Footer -->

			<section class="copyright">
				<p>Copyright © {{ date('Y') }} Designed by <a href="#">DBZ_S</a>. All rights reserved.</p>
			</section>
		</div>
	</div>
	<!-- End page -->
   
	<a id="to-the-top"><i class="fa fa-angle-up"></i></a> 
	<!-- Back To Top -->


	<!-- SCRIPT -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/plugins/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/skrollr.min.js') }}"></script>
	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
		(Load Extensions only on Local File Systems !  
		The following part can be removed on Server for On Demand Loading) -->	
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>	
	<!-- Intializing Slider-->
	<script type="text/javascript" src="{{ asset('js/plugins/slider.js') }}"></script>

	 <!-- Mobile Menu
    ================================================== --> 
     <script src="{{ asset('js/plugins/jquery.mobile-menu.js') }}"></script> 
      <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
      

  	<!-- Initializing the isotope
    ================================================== --> 
    <script src="{{ asset('js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/plugins/custom-isotope.js') }}"></script>
    <!-- Initializing Owl Carousel
    ================================================== -->
    <script src="{{ asset('js/plugins/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/plugins/custom-owl.js') }}"></script>
 	


 	<!-- PreLoad
    ================================================== --> 
    <script type="text/javascript" src="{{ asset('js/plugins/royal_preloader.min.js') }}"></script>
	<script type="text/javascript">
		(function($) { "use strict";
            Royal_Preloader.config({
                mode:           'logo',
                logo:           '../images/Header/logo_with_out_design_solution.svg',
                timeout:       1,
                showInfo:       false,
                opacity:        1,
                background:     ['#FFFFFF']
            });
		})(jQuery);
	</script>

 	<!-- Global Js
    ================================================== --> 
    <script src="{{ asset('js/plugins/custom.js') }}"></script>

    @stack('scripts')
    
</body>

</html>