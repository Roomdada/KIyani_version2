@extends('layouts.app')

@section('title', 'Portefolio detail')

@section('content')
    <div class="clearfix fake-position"></div>
    <section class="mgt60">
       <div class="container">
          <div class="row">
             <div class="single-project-warp">
                <div class="row">
                   <div class="col-md-6">
                      <div class="pj-img-demo">
                         <img src="{{ asset("images/Project/$details->image1") }}" class="img-responsive" alt="Image">
                         <img src="{{ asset("images/Project/$details->image2") }}" class="img-responsive" alt="Image">
                         <img src="{{ asset("images/Project/$details->image3") }}" class="img-responsive" alt="Image">
                      </div>
                      <!-- End Project Description -->
                   </div>
                   <div class="col-md-6">
                      <h3 class="text-cap">Portfolio Detail</h3>
                      <div class="pj-info">
                         <div>
                            <h5>Client:</h5>
                           {{$details->client_name}}
                         </div>
                         <div>
                            <h5>Location:</h5>
                           {{$details->location}}
                           
                         </div>
                          <div>
                            <h5>Location:</h5>
                           {{$details->type}}
                           
                         </div>
                         <div>
                            <h5>Surface Area:</h5>
                           {{$details->surface}}
                           
                         </div>
                         <div>
                            <h5>Value:</h5>
                           {{$details->price}}
                         </div>
                      </div>
                      <!-- End Project Info -->
                      <div class="clearfix mgb20"></div>
                      <div class="divider-line mgb20"></div>
                      <div class="pj-description">
                         <p>
                           {{$details->description}}
                           
                         </p>
                         <br>
                         <p>
                           {{$details->description}}
                         </p>
                         <br>
                         <p>
                           {{$details->description}}
                         </p>
                      </div>
                      <!-- End Project Description -->
                      <div class="clearfix mgb20"></div>
                      <div class="divider-line mgb20"></div>
                  
                   </div>
                </div>
                <!-- End Row -->
                
             </div>
          </div>
       </div>
    </section>
    <!-- End Portfolio Detail 1 -->
    <div class="clearfix"></div>
@endsection	
