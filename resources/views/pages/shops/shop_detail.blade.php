@extends('layouts.shop')

@section('title', 'Shop')

@section('content')


<div class="container">


  <div class="row">
  
    <div class="col-md-6">

       <div class="jumbotron">
       

          <img src="{{asset('images/shop/'.$info->img)}}">
           

       </div>
    
    </div>

    <div class="col-md-6">
    
    
        <div class="jumbotron">
        
        
           
              <h4>Information</h4>

              <p> {{$info->name}}</p>
              <hr>
              <p>{{$info->description}}</p>
              <hr>
              <p>
              
                 Prix: 
                 <input type="number" class="form-control invalid-feedback"  id="price" name="quantity"  min="1" max="10" value="{{$info->price}}" >

              </p>
              <p>
                 Quantité
                  <input type="number" class="form-control"  id="qtys" name="quantity"  min="1" max="10" value="1" required>
                     
                 

              </p>

              <p id="total"> 
                 Prix total: {{$info->price}}  XOF

              </p>



              <div class="btn-group">
              
                 <form method="post" action="/details/{{$info->id}}">
                 
                   @csrf()
                   @method('POST')
                   <button class="btn btn-success">
                       Enregistrer 
                   </button>
                 </form>
              
              </div>
              

                <script type="text/javascript">

                 var qty = document.querySelector('#qtys');
                 var price=document.querySelector('#price');
                 var total=document.querySelector('#total');
                 var calcule=0;

                 


                 qty.addEventListener('keyup',function(){

                    
                    
                     calcule=qty.value*price.value;

                     total.innerHTML=" Prix total : "+calcule+" XOF ";


                     
                 });

                 

                </script>
           
           
        
        </div>
    
    </div>
  
  </div>


</div>


@stop

