@extends('layouts.shop')

@section('title', 'Catalogue')

@section('content')
	<!-- Section 1Crumb -->
    <section class="no-padding-tb">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                 <ol class="breadcrumb breadcrumb-arc-2">
                    <li><a href="index-2.html"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="shop_catalog.html"> Shop</a></li>
                    <li class="active">Oak & Iron Coffee Table</li>
                  </ol>
             </div><!--  End col -->
          </div> <!-- End Row -->
       </div><!-- End container -->
    </section><!--  End Section -->
	
		 <Section class="no-padding-tb">
	  	<div class="container">
	        <div class="row">
	        	<div class="detail-product-warp">
	            	<div class="col-md-7">
                		<div class="product-detail-image">
                            <img alt="product-name" src="{{ asset("images/Shop/$details->image") }}">
                		</div>
                	</div>
               		<div class="col-md-5">
                        <div class="single-product-detail">
                                <h3 class="text-cap">{{ $details->name }}</h3>
                                <p class="price">
		                    		<span class="old-price">{{ $details->price }} FCFA</span>  
		                    	</p>
                                <div class="divider-line"></div>
                                <p>{{ $details->description }} </p>
                                  <form action="{{route('path_cart_add')}}" method="POST">
                                           @csrf
                                              
                                       <input name="id_product" type="hidden" value="{{$details->id}}">
                                        <button type="submit" class="ot-btn  btn-main-color">Add to Cart</button>
                                              
                                     </form>
                                <p class="product-code">
                                	<span class="text-cap">SKU :</span>
                                	TB-01
                                </p>
                                <p class="product-tag">
                                	<span class="text-cap">SKU :</span>
                                	<a href="#">table,</a>
                                	<a href="#">wood,</a>
                                	<a href="#">interior design,</a>
                                	<a href="#">furniture</a>
                                </p>

                                <div class="accrodion-warp">
                                	<div class="panel-group accrodion-style-1" id="accordion" role="tablist" aria-multiselectable="true">

										<div class="panel">
											<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<i class="more-less glyphicon glyphicon-plus"></i>
													Description
												</a>
											</h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												 none
											</div>
											</div>
										</div>

										<div class="panel">
											<div class="panel-heading" role="tab" id="headingTwo">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
														<i class="more-less glyphicon glyphicon-plus"></i>
														Additional Information
													</a>
												</h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
												<div class="panel-body">
													None
												</div>
											</div>
										</div>

									</div><!-- panel-group -->						
                                </div>
									
                                <div class="social-share text-center">
					                    <a href="#"><i class="fa fa-facebook"></i></a>
					                    <a href="#"><i class="fa fa-twitter"></i></a>
					                    <a href="#"><i class="fa fa-google-plus"></i></a>
					                    <a href="#"><i class="fa fa-pinterest"></i></a>
					                    <a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
                        </div>
                	</div>
       		 	</div><!-- End Product Warp -->
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

	<section>
		<div class="container">
			<div class="row">
				<h2 class="title text-cap">You may also Like....</h2>
				<div class="owl-relate-warp">
                    	<div class="customNavigation">
			                <a class="btn prev-relate"><i class="fa fa-angle-left"></i></a>
			                <a class="btn next-relate"><i class="fa fa-angle-right"></i></a>
                    	</div><!-- End owl button -->

	                  	<div id="owl-relate" class="owl-carousel owl-theme owl-relate clearfix">
			                <div class="item">
			                    <div class="product-item">
				                    <a href="#" class="products-warp">
				                      <img src="{{ asset('images/Shop/1.jpg') }}" class="img-responsive" alt="Image">
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
				                    		$99.00
				                    	</p>
				                    	<a href="#" class="ot-btn  btn-main-color">Add to Cart</a>
				                    </div>
				                </div>
			                </div>
	              	 	</div>
	              	</div><!-- End row partners -->
			</div>
		</div>
	</section>
@endsection