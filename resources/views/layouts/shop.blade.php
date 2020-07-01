

<!DOCTYPE html>
<html lang="">
   
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Kiyani - @yield('title')</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- Font -->
      <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/elegant-font.css') }}">
      <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
      <!-- REVOLUTION STYLE SHEETS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
      <!-- REVOLUTION LAYERS STYLES -->
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
      <!-- REVOLUTION NAVIGATION STYLES -->
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">
      <!-- OWL CAROUSEL
         ================================================== --> 
      <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
      
      <!-- Fancy Select
         ================================================== --> 
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/fancySelect.css') }}" />
      <!-- Main Style -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <script src="https://js.stripe.com/v3/"></script>

      <!-- Favicons
         ================================================== -->
   </head>
   <body class="bg-light-grey template-border">
      <div class="mobile-menu-first">
         <div id="mobile-menu" class="mobile-menu">
            <div class="header-mobile-menu">
               <a href="#">Total: {{Cart::subtotal()}}</a>
               <div class="mm-toggle">
                  <span aria-hidden="true" class="icon_close"></span>
               </div>
            </div>
            <!-- Mobile Menu -->
            <div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
               <ul>
                  <li>
                     <a href="{{route('path_home')}}"><i class="icon-home"></i> Home</a>
                     <ul>
                        <li><a href="index-2.html">Home Verison 1</a></li>
                        <li><a href="home_2.html">Home Verison 2</a></li>
                        <li><a href="home_3.html">Home Verison 3</a></li>
                        <li><a href="home_4-2.html">Home Verison 4</a></li>
                        <li><a href="home_5.html">Home Verison 5</a></li>
                        <li><a href="home_6.html">Home Verison 6</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="portfolioGrid_1.html"><span>Projects</span></a>
                     <ul>
                        <li><a href="portfolioGrid_1.html">Grid 2 Columns V1</a></li>
                        <li><a href="portfolioGrid_2.html">Grid 3 Columns V1</a></li>
                        <li><a href="portfolioGrid_4.html">Grid 4 Columns V1</a></li>
                        <li><a href="portfolioGrid_2_col_V2.html">Grid 2 Columns V2</a></li>
                        <li><a href="portfolioGrid_3_col_V2.html">Grid 3 Columns V2</a></li>
                        <li><a href="portfolioGrid_4_col_V2.html">Grid 4 Columns V2</a></li>
                        <li><a href="portfolioDetail_1.html">Portfolio Details 1</a></li>
                        <li><a href="portfolioDetail_2.html">Portfolio Details 2</a></li>
                        <li><a href="portfolioDetail_3.html">Portfolio Details 3</a></li>
                     </ul>
                  </li>
                  <li><a href="{{ route('path_about') }}"><span>About </span></a></li>
              
                  <li>
                     <a href="shop_catalog.html"><span>Shop</span></a>
                     <ul>
                        <li><a href="shop_catalog.html">Store Catalog</a></li>
                        <li><a href="shop_cart.html">Shopping Cart</a></li>
                        <li><a href="shop_single.html">Single Product</a></li>
                     </ul>
                  </li>
                  <li>
                  <a href="{{ route('path_contact') }}"><span>Contact Us</span></a>
                  </li>
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
                     <li>
                        <p> 8th floor, 379 Hudson St, New York, NY 10018</p>
                     </li>
                     <li>
                        <p>1-800-123-6879 </p>
                     </li>
                     <li>
                        <p> contact@arc.com</p>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- /#rmm   -->
         </div>
      </div>
      <!-- End Mobile Menu -->
      <div class="modal fade modal-search" id="myModal" tabindex="-1" role="dialog"   aria-hidden="true">
         <button type="button" class="close" data-dismiss="modal">×</button>
         <div class="modal-dialog myModal-search">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body">
                  <form role="search" method="get" class="search-form"  >
                     <input class="search-field" placeholder="Search here..." value="" title="" type="search">
                     <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- End Modal Search-->
      <div id="page">
         <div id="info" class="topbar topbar-transparent">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="topbar-left">
                        <div class="language">
                           <select class="custom-select">
                              <option>English</option>
                              <option>Italian</option>
                              <option>French</option>
                              <option>German</option>
                           </select>
                        </div>
                        <div class="social-share">
                           <a href="#"><i class="fa fa-facebook"></i></a>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                     </div>
                     <p class="ads-text text-cap">Free shipping for standard order over $100 </p>
                     <div class="topbar-right">
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End top Bar -->
         <div class="content-box effect8  clearfix">
            <header class="header-v6 " style="background: #FFF">
               <div class="container container-fill-width">
                  <div class="row">
                     <div class="left-header">
                        <form class="form-inline form-search-home-6">
                           <div class="form-group">
                              <div class="input-group">
                                 <button type="submit" class="btn-search-home-6 text-cap"><span aria-hidden="true" class="icon_search"></span></button>
                                 <input class="form-control" id="exampleInputAmount" placeholder="SEARCH HERE" type="text">
                              </div>
                           </div>
                        </form>
                     </div>
                     <!-- End Left Header -->
                     <a href="#" class="logo"><img src="{{ asset('images/Header/logo.svg') }}" class="img-responsive" alt="Image" width="100" height="80"></a>
                     <div class="right-header">
                        <ul class="navi-level-1">
                           <li><a href="#">
                              </a>
                           </li>
                           <li><div class="dropdown">
                                 <a href="#" class="dropdown-toggle cart-contents mini-cart" data-toggle="dropdown">
                                    <span aria-hidden="true" class="icon_bag_alt">
                                    </span>
                                    <span class="mini-cart-counter">{{Cart::count()}}</span>
                                    <span class="price-mini-cart">{{Cart::subtotal()}} XOF</span>
                                 </a>
                                    {{-- expr --}}
                         
                                 <div class="dropdown-menu top_cart_list_product">
                                           <ul class="cart_list product_list_widget clearfix">
                                        @foreach (Cart::content() as $data)

                                               <li class="mini_cart_item">
                                                   <div class="img-thumb">
                                                       <img alt="" class="attachment-shop_thumbnail" src="{{ asset("images/Shop/".$data->model->img) }}">
                                                   </div>
                                                   <div class="product-detail">
                                                       <form method="POST" action="{{route('destroyCart',$data->rowId)}}">
                                                         @csrf
                                                         @method('DELETE')
                                                         <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                                                         </form>  
                                                       <a href="#">{{$data->model->name}}</a>                                                                
                                                       <span class="quantity">{{$data->qty}} × 
                                                           <span class="amount">{{$data->model->price}}</span>
                                                       </span>
                                                   </div>                                            
                                               </li>
                                              @endforeach
                                           </ul>
                                           <p class="total"><strong>Subtotal:{{Cart::subtotal()}}</strong> <span class="amount">FCFA</span></p>
                                           <p class="buttons">
                                               <a class="ot-btn btn-border btn-border-white" href="#">View Cart</a>
                                               <a class="ot-btn btn-main-color " href="#">Checkout</a>
                                           </p>
                                          </div>
                                       </div>
                           </li>
                           <li><a href="#/" data-toggle="modal" data-target="#myModal" id="btn-search" class="reset-btn btn-in-navi"><span aria-hidden="true" class="icon_search"></span></a>
                           </li>
                           <li><a href="#/" class="mm-toggle">
                              <span aria-hidden="true" class="icon_menu"></span>
                              </a> 
                           </li>
                        </ul>
                     </div>
                     <nav>
                        <ul class="navi-level-1 hover-style-2 main-navi">
                           <li><a href="{{ route('path_home') }}"><span>Home</span></a></li>
                           <li><a href="{{ route('path_about') }}"><span>About</span></a></li>
                           <li><a href=""><span>Shop</span></a></li>
                           <li><a href="{{ route('path_portefolio') }}"><span>Portefolio</span></a></li>
                           <li><a href="{{ route('path_contact') }}"><span>Contact Us</span></a></li>
                        </ul>
                     </nav>
                     <!-- End Nav -->
                  </div>
               </div>
            </header>
            <!-- End header -->


            <!-- Content -->
                @yield('content')
            <!-- End Content -->

            <footer class="footer-v4 bg-dark">
               <div class="container">
                  <div class="footer-col-1">
                     <h4 class="text-cap">
                        Contact
                     </h4>
                     <ul class="">
                        <li><i class="fa fa-home" aria-hidden="true"></i> 379 5th Ave  New York, NYC 10018</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> (+1) 96 716 6879</li>
                        <li><i class="fa fa-fax" aria-hidden="true"></i> (+1) 96 716 6879</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> contact@site.com</li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Fri 09:00 - 17:00</li>
                     </ul>
                  </div>
                  <div class="footer-col-2">
                     <h4 class="text-cap">
                        Company
                     </h4>
                     <ul class="list-link-footer">
                        <li><a class="text-cap" href="#">Home</a></li>
                        <li><a class="text-cap" href="#">Projects</a></li>
                        <li><a class="text-cap" href="#">Services</a></li>
                        <li><a class="text-cap" href="#">About Us</a></li>
                        <li><a class="text-cap" href="#">Contact</a></li>
                        <li><a class="text-cap" href="#">Blogs</a></li>
                        <li><a class="text-cap" href="#">404 Pages</a></li>
                        <li><a class="text-cap" href="#">Shop</a></li>
                        <li><a class="text-cap" href="#">Elements</a></li>
                        <li><a class="text-cap" href="#">Typography</a></li>
                     </ul>
                  </div>
                  <div class="footer-col-3">
                     <h4 class="text-cap">Gallery</h4>
                     <div class="gallery-warp">
                        <a href="#"><img src="{{ asset('images/Gallery/1.jpg') }}" class="img-responsive" alt="Image"></a>
                        <a href="#"><img src="{{ asset('images/Gallery/2.jpg') }}" class="img-responsive" alt="Image"></a>
                        <a href="#"><img src="{{ asset('images/Gallery/3.jpg') }}" class="img-responsive" alt="Image"></a>
                        <a href="#"><img src="{{ asset('images/Gallery/4.jpg') }}" class="img-responsive" alt="Image"></a>
                        <a href="#"><img src="{{ asset('images/Gallery/5.jpg') }}" class="img-responsive" alt="Image"></a>
                        <a href="#"><img src="{{ asset('images/Gallery/6.jpg') }}" class="img-responsive" alt="Image"></a>
                        <a href="#"><img src="{{ asset('images/Gallery/2.jpg') }}" class="img-responsive" alt="Image"></a>
                        <a href="#"><img src="{{ asset('images/Gallery/5.jpg') }}" class="img-responsive" alt="Image"></a>
                     </div>
                  </div>
               </div>
            </footer>
            <!-- End Footer -->				
         </div>

         <section class="copyright">
            <p>Copyright © {{ date('Y') }} Designed by <a href="#">DBZ_S</a>. All rights reserved.</p>
         </section>
      </div>
      <!-- End page -->
      <a id="to-the-top"><i class="fa fa-angle-up"></i></a> 
      <!-- Back To Top -->
      <!-- SCRIPT -->
      <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
      <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/plugins/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/plugins/fancySelect.js') }}"></script>
      <script src="{{ asset('js/plugins/wow.min.js') }}"></script>

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
                mode:           'logo', // 'number', "text" or "logo"
                logo:           '../images/Header/logo_with_out_design_solution.svg',
                timeout:       1,
                showInfo:       false,
                opacity:        1,
                background:     ['#FFFFFF']
            });
        })(jQuery);
      </script>
      <script type="text/javascript">
         var stripe = Stripe('pk_test_51GzgaKHlVKZD1l4NfKmUKnCTatHsJjPGNBgW08THp2PkGJE7lQjL1QZEk94lbEeJQVlcCwcdzYAfpuNw0Oo9wA7M00XG30UYBe');
         var elements = stripe.elements();
      </script>

      <!-- Global Js
       ================================================== --> 
      <script src="{{ asset('js/plugins/custom-h6.js') }}"></script>

      @stack('scripts')
      
   </body>

</html>




