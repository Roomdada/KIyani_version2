@extends('layouts.app')

@section('title', 'Home')

@section('content')
	<section>
		<div class="rev_slider_wrapper">			
			<!-- START REVOLUTION SLIDER 5.0 auto mode -->
			<div id="slider-h1" class="rev_slider slider-home-1" data-version="5.0">
				<ul>	
					<!-- SLIDE  -->
					<li data-transition="parallaxtoright" data-masterspeed="1000" >

						<!-- MAIN IMAGE -->
						<img src="{{ asset('images/Slider/main.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
						
					</li>
					<!-- SLIDER -->
					<li data-transition="parallaxtoright" data-masterspeed="1000" >
						
						<!-- MAIN IMAGE -->
						<img src="{{ asset('images/Slider/2.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">							

						<!-- LAYER NR. 1 -->
						<div class="tp-caption heading-2 white-text" 							
							 data-x="center" 
							 data-y="center"  data-voffset="-80" 									 
					  		 data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" 
	 						 data-transform_out="y:-80px;opacity:0;s:300;" 
						
							 data-start="1000" 				 							
							>bedroom interior
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption heading-1 white-text text-cap " 						
							 data-x="center" 
							 data-y="center" 					
							 data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;" 
		 					 data-transform_out="y:80px;opacity:0;s:300;" 
							 data-start="1400" 
							>Design Awards
						</div>
						
						<!-- LAYER NR. 3 -->
						<div class="tp-caption btn-1" 							
							 data-x="center"  data-hoffset="-85"
							 data-y="center"  data-voffset="100" 
						  	 data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" 
		 					data-transform_out="y:200px;opacity:0;s:300;" 
							 data-start="1600" 
							>	
							<a href="portfolioGrid_1.html" class="ot-btn btn-main-color text-cap ">Our Projects</a>  
	      					
						</div>
						<!-- LAYER NR. 4 -->
						<div class="tp-caption btn-2" 							
							 data-x="center"  data-hoffset="85"
							 data-y="center"  data-voffset="100" 
							 data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" 
		 					 data-transform_out="y:200px;opacity:0;s:300;" 

							 data-start="1600" 
							>	
	      					<a href="contact.html" class="ot-btn btn-sub-color text-cap  ">Get a Quote</a> 
						</div>
						
					</li>
		
				</ul>			
			</div><!-- END REVOLUTION SLIDER -->
		</div><!-- END REVOLUTION SLIDER WRAPPER -->	
	</section>
	<!-- End Section Slider -->

	<section class="padding" id="services">
		<div class="container">
			<div class="row">
				<div class="title-block">
					<h2 class="title text-cap ">OUR SERVICES</h2>
					<div class="divider divider-1">
						<svg class="svg-triangle-icon-container">
						  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
						</svg>
					</div>
				</div>
				<!-- End Title -->
				<div class="row">
					@foreach($service as $all)
					<div class="col-sm-6 col-md-4 wow fadeInRight" data-wow-delay=".25s">
						<div class="block-img-full">
								<h4 class="text-cap">{{$all->name}}</h4>
							<a class="img-block" href="{{route('path_details',$all->slug)}}"><img src="{{ asset("images/Services/$all->image1") }}" class="img-responsive" alt="Image"></a>
							<div class="text-box">
								<p>
									{{$all->description}}
								</p>
							</div>
							
						</div>
					</div>
					@endforeach
			
				</div>
			<!-- End Row -->
			</div>
		</div>
	</section>
	<!-- End Section Services -->

	<section class="padding" style="margin-top: -150px;">
     <div class="container">
        <div class="row">
           <h2 class="title text-cap">Our Products</h2>
           <!-- End Title -->
           <div class="demo-products-tab ">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-tabs-arc-product wow fadeInUp2" data-wow-delay=".5s" role="tablist">
                 <li role="presentation" class="active"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab" class="text-cap">Featured</a></li>
                 <li role="presentation"><a href="#onsale" aria-controls="onsale" role="tab" data-toggle="tab" class="text-cap">On Sale</a></li>
                 <li role="presentation"><a href="#bestselling" aria-controls="bestselling" role="tab" data-toggle="tab" class="text-cap">Best Selling</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                 <div role="tabpanel" class="tab-pane active" id="featured">
                    <div class="owl-feature-warp">
                       <div class="customNavigation">
                          <a class="btn prev-feature"><i class="fa fa-angle-left"></i></a>
                          <a class="btn next-feature"><i class="fa fa-angle-right"></i></a>
                       </div>
                       <!-- End owl button -->
                       <div id="owl-feature" class="owl-carousel owl-theme owl-feature clearfix">
                        @foreach($products as $product)
                          <div class="item">
                             <div class="product-item">
                                <a href="{{ route('path_shop_product_single', 
                                    [ 
                                        'department' => $product->departments_slug, 
                                        'category' => $product->categories_slug, 
                                        'product' => $product->slug
                                    ]
                                  ) }}" class="products-warp">
                                <img src="{{ asset("images/Shop/$product->img") }}" class="img-responsive" alt="Image">
                                <span class="new-product">NEW</span>
                                </a>
                                <div class="product-info">
                                   <a href="{{ route('path_shop_product_single', 
                                            [ 
                                                'department' => $product->departments_slug, 
                                                'category' => $product->categories_slug, 
                                                'product' => $product->slug
                                            ]
                                          ) }}">
                                      <h3 class="text-cap">
                                  {{$product->name}}      
                                      </h3>
                                   </a>
                                   <p class="price">
                                {{$product->price}}      
                                   </p>
                                      <form action="{{route('path_cart_add')}}" method="POST">
                                           @csrf
                                              
                                       <input name="id_product" type="hidden" value="{{$product->id}}">
                                        <button type="submit" class="ot-btn  btn-main-color">Add to Cart</button>
                                              
                                     </form>
                                </div>
                             </div>
                          </div>
                        @endforeach
                       </div>
                    </div>
                    <!-- End row partners -->
                 </div>
                 <div role="tabpanel" class="tab-pane" id="onsale">
                    <div class="owl-onsale-warp">
                       <div class="customNavigation">
                          <a class="btn prev-onsale"><i class="fa fa-angle-left"></i></a>
                          <a class="btn next-onsale"><i class="fa fa-angle-right"></i></a>
                       </div>
                       <!-- End owl button -->
                       <div id="owl-onsale" class="owl-carousel owl-theme owl-onsale clearfix">
                          <div class="item">
                             <div class="product-item">
                                <a href="#" class="products-warp">
                                <img src="{{ asset('images/Shop/7.jpg') }}" class="img-responsive" alt="Image">
                                <span class="new-product">NEW</span>
                                <span class="sale-product">SALE</span>
                                </a>
                                <div class="product-info">
                                   <a href="#">
                                      <h3 class="text-cap">
                                         Now Clock - Black/Copper
                                      </h3>
                                   </a>
                                   <p class="price">
                                      <span class="old-price">$199.00</span>  $109.00
                                   </p>
                                   <a href="#" class="ot-btn  btn-main-color">Add to Cart</a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!-- End row partners -->
                 </div>
                 <div role="tabpanel" class="tab-pane" id="bestselling">
                    <div class="owl-best-sale-warp">
                       <div class="customNavigation">
                          <a class="btn prev-best-sale"><i class="fa fa-angle-left"></i></a>
                          <a class="btn next-best-sale"><i class="fa fa-angle-right"></i></a>
                       </div>
                       <!-- End owl button -->
                       <div id="owl-best-sale" class="owl-carousel owl-theme owl-best-sale clearfix">
                          <div class="item">
                             <div class="product-item">
                                <a href="#" class="products-warp">
                                <img src="{{ asset('images/Shop/1.jpg') }}" class="img-responsive" alt="Image">
                                <span class="new-product">NEW</span>
                                </a>
                                <div class="product-info">
                                   <a href="#">
                                      <h3 class="text-cap">
                                         Now Clock - Black/Copper
                                      </h3>
                                   </a>
                                   <p class="price">
                                      $99.00
                                   </p>
                                   <a href="#" class="ot-btn  btn-main-color">Add to Cart</a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!-- End row partners -->
                 </div>
              </div>
           </div>
        </div>
     </div>
</section>
<!-- End Section Products Tabs-->
    <!-- End Section Products Tabs-->

	<section class="padding bg-grey padding-bottom-0">
        <div class="title-block">
          <h2 class="title text-cap">Lastest Projects</h2>
          <div class="divider divider-1">
            <svg class="svg-triangle-icon-container">
              <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
            </svg>
          </div>
        </div>
          <!-- End Title -->
                      <div class="lastest-project-warp clearfix">
                            <div class="projectFilter project-terms line-effect-2">
                                  <a href="#" data-filter="*" class="current text-cap"><h4>All Projects</h4></a>
                                  <a href="#" data-filter=".Residential" class="text-cap"><h4>Residential</h4></a>
                                  <a href="#" data-filter=".Ecommercial" class="text-cap"><h4>Ecommercial</h4></a>
                                  <a href="#" data-filter=".Office" class="text-cap"><h4>Office</h4></a>
                                  <a href="#" data-filter=".Hospital" class="text-cap"><h4>Hospital</h4></a>
                            </div> <!-- End Project Fillter -->

                            <div class="clearfix projectContainer">
             
                              <div class="element-item  Residential">
                                  
                                    <img src="images/Project/1.jpg" class="img-responsive" alt="Image">
                                  <div class="project-info">
                                      <a href="portfolioDetail.html"><h4 class="title-project text-cap text-cap">Dream House</h4></a>
                                      <a href="portfolioDetail.html" class="cateProject">Residential</a>
                                  </div>
                              </div>
                           
                              <div class="element-item Residential ">
                                  
                                    <img src="images/Project/2.jpg" class="img-responsive" alt="Image">
                  
                                <div class="project-info">
                                     <a href="portfolioDetail.html"><h4 class="title-project text-cap">Wood Wall City</h4></a>
                                      <a href="portfolioDetail.html" class="cateProject">Ecommercial</a>
                                </div>
                              </div>    
                           
                              <div class="element-item Ecommercial">
                                  <a class="img-contain-isotope" href="portfolioDetail.html">
                                     <img src="images/Project/3.jpg" class="img-responsive" alt="Image">
                                     </a>
                                     <div class="project-info">
                                     <a href="portfolioDetail.html"><h4 class="title-project text-cap">Bathroom furniture</h4></a>
                                    <a href="portfolioDetail.html" class="cateProject">Residential</a>
                                  </div>
                            </div>                          
                              <div class="element-item Ecommercial ">
                                  <a class="img-contain-isotope" href="portfolioDetail.html">
                                    <img src="images/Project/4.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <div class="project-info">
                                    <a href="portfolioDetail.html"><h4 class="title-project text-cap">Living room decor</h4></a>
                                        <a href="portfolioDetail.html" class="cateProject">Residential</a>
                                  </div>
                              </div>
                           
                              <div class="element-item Office">
                                  <a class="img-contain-isotope" href="portfolioDetail.html">
                                   <img src="images/Project/5.jpg" class="img-responsive" alt="Image">
                                   </a>
                                   <div class="project-info">
                                   <a href="portfolioDetail.html"><h4 class="title-project text-cap">open Space House</h4></a>
                                        <a href="portfolioDetail.html" class="cateProject">Residential</a>
                                  </div>
                              </div>
                           
                              <div class="element-item Office">
                                  <a class="img-contain-isotope" href="portfolioDetail.html">
                                    <img src="images/Project/6.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <div class="project-info">
                                    <a href="portfolioDetail.html"><h4 class="title-project text-cap">Sky Hotel</h4></a>
                                        <a href="portfolioDetail.html" class="cateProject">Ecommercial</a>
                                  </div>
                              </div>
                           
                              <div class="element-item Hospital ">
                                  <a class="img-contain-isotope" href="portfolioDetail.html">
                                     <img src="images/Project/7.jpg" class="img-responsive" alt="Image">
                                     </a>
                                     <div class="project-info">
                                     <a href="portfolioDetail.html"><h4 class="title-project text-cap">Ogrange Corporate</h4></a>
                                        <a href="portfolioDetail.html" class="cateProject">Office</a>
                                  </div>
                              </div>    
                               
                              <div class="element-item Hospital">
                                  
                                    <img src="images/Project/8.jpg" class="img-responsive" alt="Image">
                                  <div class="project-info">
                                   <a href="portfolioDetail.html"><h4 class="title-project text-cap">Ocean view Building</h4></a>
                                        <a href="portfolioDetail.html" class="cateProject">Residential</a>
                                  </div>
                              </div>
                            </div>  <!-- End project Container -->
                      </div> <!-- End  -->
                      <div class="overlay-arc">
                        <div class="layer-1">
                          <a href="{{route("path_portefolio")}}" class="ot-btn btn-dark-color text-cap">View all project</a>
                        </div>
                      </div>
      </section>

	<!-- End Section Owl Partners -->
  <section class="padding bg-grey">
        <div class="container">
        <div class="row">
          <div class="title-block">
            <h2 class="title text-cap">Our Partners</h2>
            <div class="divider divider-1">
              <svg class="svg-triangle-icon-container">
                <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
              </svg>
            </div>
          </div>
          <!-- End Title -->
          <div class="owl-partner-warp" >
                      <div class="customNavigation">
                      <a class="btn prev-partners"><i class="fa fa-angle-left"></i></a>
                      <a class="btn next-partners"><i class="fa fa-angle-right"></i></a>
                      </div><!-- End owl button -->

                      <div id="owl-partners" class="owl-carousel owl-theme owl-partners clearfix">
                        @foreach ($partners as $element)
                          {{-- expr --}}
                        <div class="item">
                            <a href="#">
                              <img src="{{asset("images/Partner/$element->image")}}" class="img-responsive" alt="Image">
                            </a>
                        </div>
                        @endforeach

                     
                    
                     
                    </div>
                  </div><!-- End row partners -->
        </div>
        </div>
      </section>
  @include('layouts/partials/testimony')
  @include('flashy::message')

@endsection