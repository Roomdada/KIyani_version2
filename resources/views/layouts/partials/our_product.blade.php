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

                                 
                                <img src="{{ asset('images/Shop/'.$product->img) }}" class="img-responsive" alt="Image">
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