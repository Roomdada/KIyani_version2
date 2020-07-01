@extends('layouts.shop')

@section('title', 'Paiement')

@section('content')

<section class="no-padding-tb">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                 <ol class="breadcrumb breadcrumb-arc-2">
                    <li><a href="index-2.html"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="shop_catalog.html"> Checkout</a></li>
                    <li class="active">Checkout</li>
                  </ol>
             </div><!--  End col -->
          </div> <!-- End Row -->
       </div><!-- End container -->
    </section>


    <section>
    	<div class="col-md-12">
    		<h1>Effectuer le paiement maintenant</h1>
    		<form id="payment-form">
            <div id="card-element">
            </div>
            <div id="card-errors" role="alert"></div>
            <button id="submit">Pay</button>
          </form>
    	</div>
    </section>
    <br><br><br>






    
@endsection