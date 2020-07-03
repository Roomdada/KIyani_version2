@extends('layouts.app')

@section('title', 'Contact')

@section('content')
	<section>
		<div class="sub-header sub-header-1 sub-header-contact fake-position">
			<div class="sub-header-content">
				<h2 class="text-cap white-text">KIAYNI DESIGN SOLUTIONS</h2>
				<ol class="breadcrumb breadcrumb-arc text-cap">
					<li>
						<a href="{{ route('path_home') }}">Home</a>
					</li>
					<li class="active">Contact Us</li>
				</ol>
			</div>
		</div>
	</section>
	<!-- End Section Sub Header -->
	<!-- Section Google Map -->
   	<section class="padding no-padding-bot">
   		<div class="container">
   			    @if (session()->has('message'))
                <div class="alert alert-success">
                    <p class="text-center">{{session()->get('message')}}</p>
                </div>
                @endif
              
   				<div class="contact-warp">
   					<h3 class="text-cap"> Find Us On Google</h3>
   				</div>

   			<div class="row">
   				<div class="col-md-3">
   					<div class="sidebar-left sidebar-control-map">
   						<div id="controls"></div>
   					</div>
		   		</div>
				<div class="col-md-9">
					<div id="gmap-menu" style="width:100%; height:320px;"></div>
				</div>
   			</div>
   		</div>
   	</section>
   	<!-- End Section -->

	<!-- Section form contact -->
    <section class="padding padding-top-20">
    	<div class="container">
    		<div class="row">
    			<div class="contact-warp">
    				<div class="col-md-12 ">
    					<div class="left-contact contact-form-1-cols">
    						<h3 class="text-cap"> Send Us a Message</h3>
          					<form class="form-inline form-contact-arc" name="contact" method="post" action="{{route('post_path_contact')}}"">
                            {{csrf_field()}}
            				    
            					<div class="row">
        							  <div class="form-group col-md-3 ">
        							    <input value="{{old('name')}}" type="text" class="form-control" name="name" id="yourName" placeholder="Your Name">
				                        {!! $errors->first('name','<span class="help-block">:message</span>') !!}

        							  </div>
        							  <div class="form-group col-md-3 ">
        							    <select type="text" class="form-control" name="service" id="yourName" placeholder="Your Name">
        							    	<option id="1">KIyani design consultation</option>
        							    	<option id="2">KIyani design consultation</option>
        							    	<option id="3">KIyani design consultation</option>
        							    </select>
				                        {!! $errors->first('service','<span class="help-block">:message</span>') !!}

        							  </div>
        							  <div class="form-group col-md-3">
        							    <input value="{{old('email')}}" type="email" class="form-control" name="email" id="yourEmail" placeholder="Your Email" >
				                        {!! $errors->first('email','<span class="help-block">:message</span>') !!}

        							  </div>
        							  <div class="form-group col-md-3">
        							    <input value="{{old('subject')}}" type="text" class="form-control" name="subject" id="phoneNumber" placeholder="Subject" >
				                        {!! $errors->first('subject','<span class="help-block">:message</span>') !!}

        							  </div>
      						    </div>
      						    <div class="input-content padding-top-20">
        						  	<div class="form-group form-textarea">
        					  			<textarea id="textarea" class="form-control" name="message" rows="6" placeholder="Your Messages" >{{old('message')}}</textarea>
				                        {!! $errors->first('message','<span class="help-block">:message</span>') !!}

        						  	</div>
        						  </div>
                      			<button  class="ot-btn btn-main-color btn-long text-cap btn-submit">Send Mail</button>
      					 	</form> <!-- End Form -->
    					</div> <!-- End col -->
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- End Section -->
@endsection

@push('scripts')
	<script type="text/javascript">
		var LocsA = [
		    {
		        lat: 37.774509,
		        lon: -122.411727,
		        title: 'San Francisco',
		       	html: [ 
		        	'<h3>We in  San Francisco</h3>',
		        	'<p>24/7 Support</p>'
		        ].join(''),
		        icon: 'images/Contact/cd-icon-location.png',
		        animation: google.maps.Animation.DROP,
		        zoom:10
		    },
		    {
		        lat: 34.298450, 
		        lon: -111.714435,
		        title: 'Arizona',
		        html: '<h3>We in Arizona</h3>',
		        icon: 'images/Contact/cd-icon-location.png',
		        show_infowindow: true,
		        animation: google.maps.Animation.DROP,
		        zoom:4
		    },
		    {
		        lat: 35.775319, 
		        lon: -79.708533,
		        title: 'North Carolina',
		        html: [
		            '<h3>We in North Carolina</h3>',
		            '<p>We Are Architect</p>'
		        ].join(''),
		        icon: 'images/Contact/cd-icon-location.png',
		        animation: google.maps.Animation.DROP,
		        zoom:4
		    },
		    {
		        lat: 39.952644,
		        lon: -75.165247,
		        title: 'Philadelphia',
		        html: [
		            '<h3>We in Philadelphia</h3>',
		            '<p> 4th floor, 129 Hudson St, Philadelphia</p>'
		        ].join(''),
		        icon: 'images/Contact/cd-icon-location.png',
		        animation: google.maps.Animation.DROP,
		        zoom:8
		    }
		];

		new Maplace({
		    locations: LocsA,
		    map_div: '#gmap-menu',
		    controls_type: 'list',
		    controls_on_map: false,
		    map_options: {
			scrollwheel: false
			},
		    start:1,
		    styles: {
		        'Night': [{
		            featureType: 'all',
		            stylers: [
		                { invert_lightness: 'true' }
		            ]
		        }],
		        'Greyscale': [{
		            featureType: 'all',
		            stylers: [
		                { saturation: -100 },
		                { gamma: 0.50 }
		            ]
		        }],
		        
		        "Ultra Light": [
				    {
				        "featureType": "landscape",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 65
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 51
				            },
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 30
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    },
				    {
				        "featureType": "road.local",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 40
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "administrative.province",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "labels",
				        "stylers": [
				            {
				                "visibility": "on"
				            },
				            {
				                "lightness": -25
				            },
				            {
				                "saturation": -100
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "hue": "#ffff00"
				            },
				            {
				                "lightness": -25
				            },
				            {
				                "saturation": -97
				            }
				        ]
				    }
				],
		    }
		}).Load();
	</script>
@endpush
<script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message')
