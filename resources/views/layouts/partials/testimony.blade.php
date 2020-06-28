<section class="padding bg-parallax section-dark-testimonials">
				<div class="container">
				<div class="row">
					<div class="title-block">
						<h2 class="title text-cap">What Our Client Says</h2>
						<div class="divider divider-2">
							<svg class="svg-triangle-icon-container">
							  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
							</svg>
						</div>
					</div>
					<!-- End Title -->
					<div class="testimonial-warp testimonial-2-col">
			              <div class="customNavigation">
			                <a class="btn prev-testimonials-2-columns"><i class="fa fa-angle-left"></i></a>
			                <a class="btn next-testimonials-2-columns"><i class="fa fa-angle-right"></i></a>
			              </div>  
			              <div id="owl-testimonials-2-columns" class="owl-carousel owl-theme clearfix">
			              	@foreach ($testimony as $element)
			              		{{-- expr --}}
				              <div class="item item-testimonials text-left">
				                  <p class="quote-icon">“</p>
				                  <p><i>{{$element->testimony}}</i></p>
				                  <div class="avatar-testimonials">
				                    <img src="{{asset("images/Testimonials/$element->image")}}" class="img-responsive" alt="Image">
				                  </div>
				                  <h4 class="name-testimonials text-cap">{{$element->name}}</h4>
				                  <span class="job-testimonials">{{$element->post}</span>
				              </div><!-- end item -->
			              	@endforeach

			              </div>
		          	</div>
				</div>  
				</div>
			</section>