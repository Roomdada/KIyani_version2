@extends('layouts.shop')

@section('title', 'Product')

@section('content')

	<section class="no-padding-tb">
		<div class="container">
			<div class="row">
				<div class="header-shop-banner hsb-1">
				</div>
			</div>
		</div>
	</section>
	<!-- End Header Shop Banner -->
	
		<Section class="">
	  	<div class="container">
	        <div class="row">
	            <div class="main-shop content-area">
	                    <main id="main" class="site-main padding-top-50" >
	                        <div class="arc-sorting">
                                <p class="woocommerce-result-count">Showing 1 &ndash; 10 of 23 results</p>
	                        </div> <!-- End Finance Sorting -->
	                        <div class="row">
	                        	<div class="products">
	                                <div class="col-md-4">
	                                 	<div class="product-item">
						                    <a href="#" class="products-warp">
						                      <img src="{{ asset('images/Shop/1.jpg') }}" class="img-responsive" alt="Image">
					                       		<span class="new-product">NEW</span>
						                      	
						                    </a>
						                    
						                    <div class="product-info">
						                    	<a href="#">
						                    		<h3 class="text-cap">
							                    		Product 1
							                    	</h3>
						                    	</a>
						                    	<p class="price">
						                    		$99.00
						                    	</p>
						                    	<a href="#" class="ot-btn btn-block btn-main-color">Add to Cart</a>
						                    </div>
						                </div>
	                                </div>
	                        	</div><!-- End Products -->
	                       	</div><!-- End Row -->
	                       
	                        <nav class="woocommerce-pagination padding-top-30" style="display: flex; margin-left: auto; justify-content: center;">
	                          <ul class="page-numbers pagination">
	                              <li><a class="current" href="#">1</a></li>
	                              <li><a href="#">2</a></li>
	                              <li><a href="#">3</a></li>
	                              <li><a href="#">4</a></li>
	                              <li><a href="#">5</a></li>
	                               <li class="threedots">...</li>
	                                <li><a href="#">25</a></li>
	                              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
	                          </ul>
	                        </nav>
	                    </main> <!-- End Main -->
	        	</div>
	   		</div><!-- End Row -->
	 	</div><!-- End container -->
	</Section> <!--End List Product -->


	<section class="bg-promotion-product">
		<div class="container">
			<div class="row">
				<div class="promotion-product-warp">
					<div class="promotion-product-item">
						<div class="promotion-product-item-inner">
							<h4 class="text-cap">
								Money back
							</h4>
							<p class="text-cap">
								If you are not satisfied with your purchase
							</p>
						</div>
					</div>

					<div class="promotion-product-item">
						<div class="promotion-product-item-inner">
							<h4 class="text-cap">
								Free Shipping
							</h4>
							<p class="text-cap">
								Free shipping for standard order over $100
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Section Promotion Product -->
@endsection