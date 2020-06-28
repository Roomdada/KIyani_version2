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
                         <img src="{{ asset('images/Project/pj-detail-3.jpg') }}" class="img-responsive" alt="Image">
                         <img src="{{ asset('images/Project/pj-detail-4.jpg') }}" class="img-responsive" alt="Image">
                         <img src="{{ asset('images/Project/pj-detail-5.jpg') }}" class="img-responsive" alt="Image">
                      </div>
                      <!-- End Project Description -->
                   </div>
                   <div class="col-md-6">
                      <h3 class="text-cap">Portfolio Detail</h3>
                      <div class="pj-info">
                         <div>
                            <h5>Client:</h5>
                            Au Company
                         </div>
                         <div>
                            <h5>Location:</h5>
                            Central Street, San Francisco
                         </div>
                         <div>
                            <h5>Surface Area:</h5>
                            650,000 m2
                         </div>
                         <div>
                            <h5>Value:</h5>
                            $350,000
                         </div>
                      </div>
                      <!-- End Project Info -->
                      <div class="clearfix mgb20"></div>
                      <div class="divider-line mgb20"></div>
                      <div class="pj-description">
                         <p><strong>Problem, meet solution.</strong> Curabitur dictum viverra urna. Nam ullamcorper egestas lacinia. Fusce fermentum velit non velit malesuada, vel aliquam leo viverra. Etiam id justo mattis, bibendum eros non, finibus diam. Suspendisse suscipit, arcu ac rutrum pellentesque, nunc sapien molestie nisi, id pellentesque odio diam quis justo. Proin rutrum convallis mauris. Morbi vulputate bibendum velit id tincidunt. Fusce auctor aliquam nunc in tristique. Nulla luctus dictum enim ut pulvinar. Pellentesque rutrum ultricies dignissim. </p>
                         <br>
                         <p><strong>Interior designers.</strong> Curabitur dictum viverra urna. Nam ullamcorper egestas lacinia. Fusce fermentum velit non velit malesuada, vel aliquam leo viverra.Etiam id justo mattis, bibendum eros non, finibus diam. Suspendisse suscipit, arcu ac rutrum pellentesque, nunc sapien molestie nisi, id pellentesque odio diam quis justo. Proin rutrum convallis mauris. Suspendisse suscipit, arcu ac rutrum pellentesque, nunc sapien molestie nisi, id pellentesque odio diam quis justo. Proin rutrum convallis mauris. Morbi vulputate bibendum velit id tincidunt. Fusce auctor aliquam nunc in tristique. Nulla luctus dictum enim ut pulvinar. Pellentesque rutrum ultricies dignissim. </p>
                         <br>
                         <p><strong>Working conditions.</strong> Curabitur dictum viverra urna. Nam ullamcorper egestas lacinia. Fusce fermentum velit non velit malesuada, vel aliquam leo viverra. Etiam id justo mattis, bibendum eros non, finibus diam. Suspendisse suscipit, arcu ac rutrum pellentesque, nunc sapien molestie nisi, id pellentesque odio diam quis justo. Proin rutrum convallis mauris. Morbi vulputate bibendum velit id tincidunt. Fusce auctor aliquam nunc in tristique. Nulla luctus dictum enim ut pulvinar. Pellentesque rutrum ultricies dignissim.Morbi vulputate bibendum velit id tincidunt. Fusce auctor aliquam nunc in tristique. Nulla luctus dictum enim ut pulvinar. Pellentesque rutrum ultricies dignissim. </p>
                      </div>
                      <!-- End Project Description -->
                      <div class="clearfix mgb20"></div>
                      <div class="divider-line mgb20"></div>
                      <div class="social-share">
                         <p class="text-cap">Share:</p>
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-google-plus"></i></a>
                         <a href="#"><i class="fa fa-pinterest"></i></a>
                         <a href="#"><i class="fa fa-linkedin"></i></a>
                      </div>
                   </div>
                </div>
                <!-- End Row -->
                <div class="divider-line"></div>
                <p class="arr-pj-container text-center">
                   <a href="#" class="prev-pj-arr text-cap"><i class="fa fa-angle-left" aria-hidden="true"></i> Prev</a>
                   <a href="portfolioGrid_1.html" class="btn-portfolio"><i class="fa fa-th" aria-hidden="true"></i></a>
                   <a href="#" class="next-pj-arr text-cap">Next <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </p>
                <div class="divider-line"></div>
             </div>
          </div>
       </div>
    </section>
    <!-- End Portfolio Detail 1 -->
    <div class="clearfix"></div>
@endsection	