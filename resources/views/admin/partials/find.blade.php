@extends('admin/home')
@section('content')
<div class="container card">
    <p class="card-title">Rechercher un client</p>
    @if($errors->first('search') and !empty($errors->first('search')))

                <div class="alert alert-danger">
                                                     
                   {{$errors->first('search')}}
                </div>

    @endif
    <form method="post" action="">
        @csrf()
        <div class="row card-body">
            <input type="text" name="search" class="form-control col-md-10" value="{{old('search')}}">
            <button type="submit" class="btn btn-dark col-md-2" ><i class="fa fa-search"></i></button>
        </div>
    </form>

    
   
      
                                        

                                       
</div>

<br>
<br>

                                    <table class="col-md-12 table table-responsive">
                                            <thead class="bg-dark">
                                            <tr class="text-light" style="font-size: 15px;">
                                                <th>Identifiant</th>
                                                <th>categorie</th>
                                                <th>nom</th>
                                                <th>quantité</th>
                                                <th>prix</th>
                                                <th>couleur(*)</th>
                                                <th>image</th>
                                                <th>Date d'ajout</th>
                                                <th>action</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody style="font-size: 15px;">
                                            
                                            </tbody>

                                        </table>


@stop