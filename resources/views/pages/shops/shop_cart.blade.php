@extends('layouts.shop')

@section('title', 'Cart')

@section('content')
	<!-- Section BreadCrumb -->
    <section class="no-padding-tb">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                 <ol class="breadcrumb breadcrumb-arc-2">
                    <li><a href="index-2.html"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="shop_catalog.html"> Shop</a></li>
                    <li class="active">Shopping Cart</li>
                  </ol>
             </div><!--  End col -->
          </div> <!-- End Row -->
       </div><!-- End container -->
    </section><!--  End Section -->
	
	<Section class="no-padding-top">
	  	<div class="container">
            <div class="shopping-cart-warp">
                    <div class="table-responsive">
                      <table  class="shop_table shop_table_responsive cart table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (empty(Cart::content()))
                            <tr class="cart_item">
                                <td class="product-thumbnail">
                                  <p>{{'Votre panier est vide'}}</p>
                               </td>
                            </tr>
                            @endif
                            @foreach (Cart::content() as $element)
                                {{-- expr --}}
                            <tr class="cart_item">
                                <td class="product-thumbnail">
                                    <a href="#">
<<<<<<< HEAD
                                        <img alt="product-name" src="{{asset('images/Shop/'.$element->model->image)}}">
=======
                                        <img alt="product-name" src="{{asset("images/Shop/".$element->model->img)}}">
>>>>>>> cfadbdfa1eaf4df2b8764dbefe8f2f49146a2690
                                    </a>                 
                                </td>
                                <td data-title="Product" class="product-name">
                                    <a href="#">{{$element->model->name}}</a>
                                    <span>Color:White</span>
                                </td>
                                <td data-title="Price" class="product-price">
                                    <span class="amount">{{$element->model->price}}</span>                   
                                </td>

                                
                                <td data-title="Quantity" class="product-quantity">
                                  <select name="qty"  data-id="{{$element->rowId}}" id="qty" class="custom-select">
                                      

                                        @for($i=1;$i<=10;$i++)
                                         
                                         <option   value="{{$i}}">{{$i}}</option>
                                         @endfor

                                         
                                     
                                  </select>
                                </td>
                                <td data-title="Total" class="product-subtotal">
                                    <span class="amount">{{$element->price}} XOF</span>                   
                                </td>
                                <td class="product-remove">
                                    <form method="POST" action="{{route('destroyCart',$element->rowId)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                                    <a class="btn btn-success" href="/details/{{$element->id}}"><i class="fa fa-pencil"></i></a>
                                    </form>                   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                     <div class="actions">
                            <div class="coupon pull-left"> 
                                <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code"> 
                                <input type="submit" value="Apply Coupon" name="apply_coupon" class="ot-btn btn-coupon text-cap">
                            </div>                                        
                              <a href="{{route('updateCart')}}" class="btn btn-outline-secondary pull-right">
                                       Update shopping cart
                              </a>
                            <input type="hidden" value="" name="_wpnonce" id="_wpnonce">
                            <input type="hidden" value="/woocommerce-test/cart/" name="_wp_http_referer">         
                     </div>
            </div>
            <!-- End Shopping Cart Warp -->
            <div class="cart-collaterals">
                    <div class="cart_totals ">
                        <h4 class="text-cap">Cart Totals</h4>
                         <div class="table-responsive">
                            <table class="shop_table shop-proceed shop_table_responsive">
                            	<tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal:</th>
                                        <td data-title="Subtotal"><span class="amount"><strong></strong></span></td>
                                    </tr>
                           		 	<tr class="shipping">
                                        <th>Shipping:</th>
                                        <td data-title="Shipping">
                                                <p>There are no shipping methods available. Please double check your address, or contact us if you need any help.</p>
                                                <form method="post" action="{{route('check')}}" class="woocommerce-shipping-calculator">
                                                       @csrf
                                                    <p><a class="ot-btn btn-coupon shipping-calculator-button" href="#"> Calculate Shipping</a></p>

                                                    <section class="shipping-calculator-form no-padding">
                                                            <p id="calc_shipping_state_field" class="form-row form-row-wide" >
                                                                <input type="text" placeholder="Name"  id="calc_shipping_state" name="name" class="input-text">  
                                                            </p>

                                                            <p id="calc_shipping_postcode_field" class="form-row form-row-wide">
                                                                <input type="email" id="calc_shipping_postcode" name="email" placeholder="Email" value="" class="input-text">
                                                            </p>
                                                             <p id="calc_shipping_postcode_field" class="form-row form-row-wide">
                                                                <input type="number" id="calc_shipping_postcode" name="contact" placeholder="Contact" value="" class="input-text">
                                                            </p>
                                                               <p id="calc_shipping_postcode_field" class="form-row form-row-wide">
                                                                <input type="text" id="calc_shipping_postcode" name="commune" placeholder="Commune" value="" class="input-text">
                                                            </p>
                                                            <input type="hidden" name="price_total" value="{{Cart::subtotal()}}">
                                                         
                    
                                                            <p class=" margin-top-15">
                                                                <button class="ot-btn btn-coupon" value="1" name="calc_shipping" type="submit">Commander</button>
                                                            </p> 
                                                    </section>
                                                    </form>
                                                </td>
                                            </tr>
                                        <tr class="order-total">
                                            <th>Total:</th>
                                            <td data-title="Total"><strong><span class="amount">{{Cart::subtotal()}} XOF</span></strong> </td>
                                        </tr>
                                    </tbody>
                            </table>
                          </div>

                        <div class="wc-proceed-to-checkout">        
                            <a class="ot-btn btn-main-color btn-block checkout-button" href="{{route('checkout')}}">
                                Proceed to Checkout <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
            </div>
            <!-- End Cart Collaterals -->
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


<<<<<<< HEAD
<script type="text/javascript" >

var qty = document.getElementsByName('#qty');

var table=Array.from(qty);

console.log(table[0]);

Array.from(qty).forEach((element)=>{

element.addEventListener('change',function(){ 

    
    var rowId = this.getAttribute('data-id');
    var token = document.querySelectorAll('meta[name="csrf-token"]').getAttribute('content');


    fetch
    (

        `cart/${rowId}`,
        {
            headers:
            {
                "Content-type":"application/json",
                "Accept":"application/json, text-plain,*/*",
                "X-Request-With":"XMLHttpRequest",
                "X-CSRF-TOKEN":token
            },
            method:'patch',
            body:JSON.stringify({
                qty:this.value
            })
        }
    ).then((data)=>{
            console.log(data);
            location:reload();
        }).catch((error)=>{
            console.log(error);
    })
})

});




</script>
=======
>>>>>>> cfadbdfa1eaf4df2b8764dbefe8f2f49146a2690
