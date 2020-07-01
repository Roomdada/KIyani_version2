@extends('layouts.shop')

@section('title', 'Shop')

@section('content')


<div class="container">


  <div class="row">
  
    <div class="col-md-6">

       <div class="container">
       

          <img src="{{asset('images/shop/'.$info->image)}}">
           

       </div>
    
    </div>

    <div class="col-md-6">

      <form method="post" action="/details/{{$info->id}}">
    
    
        <div class="container-fluid">
        
        
           
              <h4>Information</h4>

              <p> {{$info->name}}</p>
              <hr>
              <p>{{$info->description}}</p>
              <hr>
               <p>
                  Prix: 
                  <input type="number" class="form-control invalid-feedback"  id="price" name="price"   value="{{$info->price}}" >
               </p>
               <p>
                  Quantité
                     <input type="number" class="form-control"  id="qtys" name="quantity"  min="1" max="10" value="1" required>
                        
               </p>

               <p id="total"> 
                  Prix total: {{$info->price}}  XOF
               </p>
              <input type="hidden" class="form-control"  id="total2" name="total"  min="1" max="10" value="{{$info->price}}" required>



              <div class="btn-group">
              
                 
                 
                   @csrf()
                   
                   <button  type="submit" class="btn btn-success">
                       Enregistrer 
                   </button>
                
              
              </div>

            </form>

              <br>
              <br>
              

                <script type="text/javascript">

                 var qty = document.querySelector('#qtys');
                 var price=document.querySelector('#price');
                 var total=document.querySelector('#total');
                 var total2=document.querySelector('#total2');
                 var calcule=0;

                 


                 qty.addEventListener('keyup',function(){

                    
                    
                     calcule=qty.value*price.value;

                     total.innerHTML=" Prix total : "+calcule+" XOF ";

                     total2.innerHTML="<input type=\"hidden\" class=\"form-control\"  id=\"total2\" name=\"total\"  min=\"1\" max=\"10\" value="+calcule+" required>";

                     
                 });

                 

                </script>
           
           
        
        </div>
    
    </div>
  
  </div>


</div>


@stop

