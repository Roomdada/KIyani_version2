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
                                        <img alt="product-name" src="{{asset("images/Shop/".$element->model->image)}}">
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
                                  <select name="qty" id="qty" data-id="{{$element->rowId}}" class="custom-select">
                                      @for ($i = 1; $i <=10 ; $i++)
                                         <option value="{{$i}}">{{$i}}</option>
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
                                                <form method="post" action="#" class="woocommerce-shipping-calculator">

                                                    <p><a class="ot-btn btn-coupon shipping-calculator-button" href="#"> Calculate Shipping</a></p>

                                                    <section class="shipping-calculator-form no-padding">

                                                            <p id="calc_shipping_country_field" class="form-row form-row-wide">
                                                                <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
                                                                    <option value="">Select a country…</option>
                                                                    <option value="AX">Åland Islands</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="PW">Belau</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">CuraÇao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao S.A.R., China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="IE">Republic of Ireland</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom (UK)</option><option value="US">United States (US)</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option  value="VN">Vietnam</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="WS">Western Samoa</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>            </select>
                                                            </p>

                                                            <p id="calc_shipping_state_field" class="form-row form-row-wide" >
                                                                <input type="text" placeholder="State / county" value="" id="calc_shipping_state" name="calc_shipping_state" class="input-text">  
                                                            </p>

                                                            <p id="calc_shipping_postcode_field" class="form-row form-row-wide">
                                                                <input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / ZIP" value="" class="input-text">
                                                            </p>

                                                            <p class=" margin-top-15">
                                                                <button class="ot-btn btn-coupon" value="1" name="calc_shipping" type="submit">Update Totals</button>
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
                            <a class="ot-btn btn-main-color btn-block checkout-button" href="#">
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


<script type="text/javascript">
    

</script>