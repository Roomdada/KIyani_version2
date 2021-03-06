@extends('layouts.shop')

@section('title', 'Shop')

@section('content')
  <section class="no-padding-tb">
       <div class="rev_slider_wrapper">
          <!-- START REVOLUTION SLIDER 5.0 auto mode -->
          <div id="slider-h6" class="rev_slider slider-home-6" data-version="5.0">
             <ul>
                <!-- SLIDE  -->
                <li data-transition="incube-horizontal"  >
                   <!-- MAIN IMAGE -->
                   <img src="{{ asset('images/Slider/h6-3.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover">             
                   <!-- LAYER NR. 1 -->
                   <div class="tp-caption heading-9 text-cap "            
                      data-x="left"  data-hoffset="15" 
                      data-y="center" data-voffset="-90" 
                      data-transform_in="y:[-150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                      data-start="900" 
                      ><strong>starting form</strong>
                   </div>
                   <!-- LAYER NR. 2 -->
                   <div class="tp-caption heading-10 text-cap"              
                      data-x="left"  data-hoffset="55" 
                      data-y="center" data-voffset="-35"               
                      data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                      data-start="900"                            
                      > $9.90
                   </div>
                   <!-- LAYER NR. 3 -->
                   <div class="tp-caption  heading-11 text-center"              
                      data-x="left"  
                      data-y="center" data-voffset="50"                
                      data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                      data-start="1200"                             
                      > Cafe, Restaurant, Hotel<br> Furniture Facetory
                   </div>
                   <!-- LAYER NR. 4 -->
                   <div class="tp-caption btn-2"              
                      data-x="left"     data-hoffset="55" 
                      data-y="center"  data-voffset="140" 
                      data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"        
                      data-start="1400"   
                      > 
                      <a href="shop_catalog.html" class="ot-btn btn-white-color text-cap  ">Shop Now</a> 
                   </div>
                </li>
                <!-- SLIDE  -->
                <li data-transition="cube-horizontal">
                   <!-- MAIN IMAGE -->
                   <img src="{{ asset('images/Slider/h6-2.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover">             
                   <!-- LAYER NR. 1 -->
                   <div class="tp-caption heading-6 "             
                      data-x="center" 
                      data-y="center" data-voffset="-100"             
                      data-transform_in="y:[-150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                      data-start="700" 
                      ><strong>Order now,</strong>
                   </div>
                   <!-- LAYER NR. 2 -->
                   <div class="tp-caption heading-7 "               
                      data-x="center" 
                      data-y="center"   data-voffset="-45"            
                      data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                      data-start="900"                        
                      >Save % 20
                   </div>
                   <!-- LAYER NR. 2 -->
                   <div class="tp-caption heading-8 white-text text-center"               
                      data-x="center" 
                      data-y="center"   data-voffset="40"              
                      data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                      data-start="1100"                             
                      >Table, Char, Sofa Factory New <br>Collection 2018
                   </div>
                   <!-- LAYER NR. 3 -->
                   <div class="tp-caption btn-2"              
                      data-x="center" 
                      data-y="center"  data-voffset="140" 
                      data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"        
                      data-start="1400"   
                      > 
                      <a href="shop_catalog.html" class="ot-btn btn-white-color text-cap  ">Shop Now</a> 
                   </div>
                </li>
                <!-- SLIDE  -->
                <li data-transition="cube"  >
                   <!-- MAIN IMAGE -->
                   <img src="{{ asset('images/Slider/h6-1.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover">             
                   <!-- LAYER NR. 1 -->
                   <div class="tp-caption heading-1 white-text text-cap "             
                      data-x="center" 
                      data-y="center" data-voffset="-90"            
                      data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                      data-start="700" 
                      ><strong>Hello, Sale.</strong>
                   </div>
                   <!-- LAYER NR. 2 -->
                   <div class="tp-caption heading-5 white-text text-cap"              
                      data-x="center" 
                      data-y="center"                
                      data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                      data-start="900"                            
                      >Get <mark>50%</mark> Off Our Popular Products
                   </div>
                   <!-- LAYER NR. 3 -->
                   <div class="tp-caption btn-2"              
                      data-x="center" 
                      data-y="center"  data-voffset="120" 
                      data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"        
                      data-start="1100"   
                      > 
                      <a href="shop_catalog.html" class="ot-btn btn-white-color text-cap  ">Shop Now</a> 
                   </div>
                </li>
             </ul>
          </div>
          <!-- END REVOLUTION SLIDER -->
       </div>
       <!-- END REVOLUTION SLIDER WRAPPER --> 
    </section>

    <!-- cat -->
    <section class="padding" >
       <div class="row">
          <h2 class="title text-cap">Our Category</h2>
          <div class="products">
               <div class="col-md-3">
                   <div class="product-item">
                     <a href="#" class="products-warp">
                       <img src="{{ asset('images/Shop/1.jpg') }}" class="img-responsive img-circle" alt="Image">
                     </a>
                     <div class="product-info">
                         <a href="#">
                            <h3 class="text-cap">
                               Category
                            </h3>
                         </a>
                     </div>
                   </div>
               </div>
          </div><!-- End Products -->
       </div><!-- End Row -->
    </section>
    <!-- cat End -->

    <!-- End Section Slider -->
    <section class="padding">
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
                            <div class="item">
                               <div class="product-item">
                                  <a href="#" class="products-warp">
                                  <img src="{{ asset('images/Shop/1.jpg') }}" class="img-responsive" alt="Image">
                                  <span class="new-product">NEW</span>
                                  </a>
                                  <div class="product-info">
                                     <a href="#">
                                        <h3 class="text-cap">
                                           Category
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
                                  <img src="{{ asset('images/Shop/8.jpg') }}" class="img-responsive" alt="Image">
                                  <span class="new-product">NEW</span>
                                  <span class="sale-product">SALE</span>
                                  </a>
                                  <div class="product-info">
                                     <a href="#">
                                        <h3 class="text-cap">
                                           The Green Chair - Black
                                        </h3>
                                     </a>
                                     <p class="price">
                                        <span class="old-price">$399.00</span>  $299.00
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
                                           Category
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
    <section class="bg-promotion-product">
       <div class="container">
          <div class="row">
             <div class="promotion-product-warp">
                <div class="promotion-product-item wow fadeInLeft" data-wow-delay=".25s">
                   <div class="promotion-product-item-inner">
                      <h4 class="text-cap">
                         Money back
                      </h4>
                      <p class="text-cap">
                         If you are not satisfied with your purchase
                      </p>
                   </div>
                </div>
                <div class="promotion-product-item wow fadeInRight" data-wow-delay=".25s">
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