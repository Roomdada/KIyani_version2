@extends('layouts.app')

@section('title', 'Service')

@section('content')
	<section>
       <div class="sub-header sub-header-1 sub-header-our-services-2 fake-position">
          <div class="sub-header-content">
             <h2 class="text-cap white-text">Ecommercial Design</h2>
             <ol class="breadcrumb breadcrumb-arc text-cap">
                <li>
                   <a href="{{ route('path_home') }}">Home</a>
                </li>
                <li class="active">{{$details->name}}</li>
             </ol>
          </div>
       </div>
    </section>
    <!-- End Section Sub Header -->
    
    <section class="padding">
       <div class="container">
          <div class="row">
             <div class="sidebar-services sidebar-right">
                <ul class="sidebar-style-2">
                   <li class="active"><a href="#">Residential Design</a></li>
                   <li><a href="#">Ecommercial Design</a></li>
                   <li><a href="#">Office Design</a></li>
                   <li><a href="#">Hospital Design</a></li>
                </ul>
                <div class="box-question-sidebar text-center">
                   <p>Have questions about our services?</p>
                   <a href="{{route('path_contact')}}" class="ot-btn btn-main-color text-cap">Contact Us</a>
                </div>
             </div>
             <div class="main-services main-services-left">
                <div class="slide-services">
                   <div class="customNavigation">
                      <a class="btn prev-detail-services"><i class="fa fa-angle-left"></i></a>
                      <a class="btn next-detail-services"><i class="fa fa-angle-right"></i></a>
                   </div>
                   <div id="sync3" class="owl-carousel owl-detail-services clearfix">
                      <div class="item ">
                         <img src="{{ asset("images/Services/$details->image1") }}" class="img-responsive" alt="Image">
                      </div>
                      <!-- end item -->
                      <div class="item ">
                         <img src="{{ asset("images/Services/$details->image2") }}" class="img-responsive" alt="Image">
                      </div>
                      <!-- end item -->
                      <div class="item ">
                         <img src="{{ asset("images/Services/$details->image3") }}" class="img-responsive" alt="Image">
                      </div>
                      <!-- end item -->
                      <div class="item ">
                         <img src="{{ asset("images/Services/$details->image4") }}" class="img-responsive" alt="Image">
                      </div>
                      <!-- end item -->
                      <div class="item ">
                         <img src="{{ asset("images/Services/$details->image5") }}" class="img-responsive" alt="Image">
                      </div>
                      <!-- end item -->
                   </div>
                   <!-- End Main Sync owl -->
                   <div id="sync4" class="owl-carousel thumb-service-slide">
                      <div class="item"><img src="{{ asset("images/Services/$details->image1") }}" class="img-responsive" alt="Image"></div>
                      <div class="item"> <img src="{{ asset("images/Services/$details->image2") }}" class="img-responsive" alt="Image"></div>
                      <div class="item"><img src="{{ asset("images/Services/$details->image3") }}" class="img-responsive" alt="Image"></div>
                      <div class="item"><img src="{{ asset("images/Services/$details->image4") }}" class="img-responsive" alt="Image"></div>
                      <div class="item"><img src="{{ asset("images/Services/$details->image5") }}" class="img-responsive" alt="Image"></div>
                   </div>
                   <!-- End Navithumbnail Owl Sync -->
                </div>
                <div class="content-text-services">
                   <div class="row">
                      <div class="col-md-6">
                         <h3>{{$details->name}}</h3>
                         <p>
                          {{$details->description}}
                         </p>
                      </div>
                      <div class="col-md-6">
                         <h3>Art Deco</h3>
                         <p>Integer vitae nunc felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu elit in libero maximus cursus. Sed a leo ex. Proin in nunc sagittis metus eleifend dictum sed vitae nisl. </p>
                         <h3>Modern Art</h3>
                         <p>Ut auctor ornare tortor sit amet viverra. Maecenas lobortis aliquet nunc, sed cursus nibh convallis eu. Duis vitae arcu at ante tincidunt facilisis nec eget erat. Cras bibendum consequat dui sit amet malesuada. In interdum ante vel eros varius elementum. </p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- End Section How This Would Help You -->
@endsection