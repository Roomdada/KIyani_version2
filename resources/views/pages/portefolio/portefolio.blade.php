@extends('layouts.app')

@section('title', 'Portefolio')

@section('content')
	<section>
       <div class="sub-header sub-header-1 sub-header-portfolio-grid-1 fake-position">
          <div class="sub-header-content">
             <h2 class="text-cap white-text">Portfolio Grid</h2>
             <ol class="breadcrumb breadcrumb-arc text-cap">
                <li>
                   <a href="#">Home</a>
                </li>
                <li class="active">Portfolio Grid</li>
             </ol>
          </div>
       </div>
    </section>
    <!-- End Section Sub Header -->
    <section class="padding bg-grey padding-bottom-0">
       <div class="container">
          <div class="row">
             <div class="lastest-project-warp portfolio-grid-v2-2-col-warp clearfix">
                <div class="projectFilter project-terms line-effect-2">
                   <a href="#" data-filter="*" class="current text-cap">
                      <h4>All Projects</h4>
                   </a>
                   <a href="#" data-filter=".Residential" class="text-cap">
                      <h4>Residential</h4>
                   </a>
                   <a href="#" data-filter=".Ecommercial" class="text-cap">
                      <h4>Ecommercial</h4>
                   </a>
                   <a href="#" data-filter=".Office" class="text-cap">
                      <h4>Office</h4>
                   </a>
                    <a href="#" data-filter=".Hospital" class="text-cap">
                      <h4>Hospital</h4>
                   </a>
                </div>
                <!-- End Project Fillter -->

                  {{-- expr --}}
                <div class="clearfix projectContainer portfolio-grid-v2-2-col-container">
                @foreach ($all_porte as $element)
                   <div class="element-item  {{$element->type}}">
                      <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="{{ asset("images/Project/$element->image1") }}" class="img-responsive" alt="Image"></a>
                      <div class="project-info">
                         <a href="{{route('portefolio_details',$element->slug)}}">
                            <h4 class="title-project text-cap text-cap">{{$element->name}}</h4>
                         </a>
                         <a href="{{route('portefolio_details',$element->slug)}}" class="cateProject">{{$element->type}}</a>
                      </div>
                   </div>
                @endforeach


                   
                </div>
                <!-- End project Container -->
             </div>
             <!-- End  -->
          </div>
       </div>
       <div class="clearfix mgt60"></div>
       <div class="overlay-arc ">
          <div class="layer-1">
             <a href="#" class="ot-btn btn-border btn-border-dark btn-long text-cap">Get a Quote</a>
          </div>
       </div>
    </section>
    <!-- End Section Isotop Lastest Project -->
@endsection