@extends('admin/home')
@section('content')

              <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Ajouter un article </h5>
                                                <div>

                                                @if($errors->first('name') and !empty($errors->first('name')))

                                                     <div class="alert alert-danger">
                                                     
                                                        {{$errors->first('name')}}
                                                     </div>

                                                @endif

                                        <form method="post" action="" enctype="multipart/form-data">

                                                <input type="hidden" name="_token" value="{{csrf_token()}}">                                                      
                                                <div class="position-relative form-group"><label for="exampleSelect" class="">Catégorie</label>
                                                <select name="categorie" id="exampleSelect" class="form-control">
                                                        <option value="1">1 (new)</option>
                                                        <option value="2">2 (sold)</option>
                                                        <option value="3">3 (meilleur vente)</option>
                                                        
                                                    </select></div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Nom de l'article</span></div>
                                                        <input placeholder="nom de l'article" value="{{old('name')}}" name="name" type="text" class="form-control"></div>
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Quantité en stock</span></div>
                                                        <input placeholder="quantity" type="number" value="{{old('stock')}}" name="stock" class="form-control"></div>
                                                    <br>

                                                    
                                                    
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Couleur (facultatif)</span></div>
                                                        <input placeholder="color" type="text" name="color" class="form-control"></div>
                                                    
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Prix</span></div>
                                                        <input placeholder="montant" type="number" value="{{old('price')}}" name="price" class="form-control"></div>
                                                    
                                                    <br>
                                                    @if($errors->first('price') and !empty($errors->first('price')))

                                                    <div class="alert alert-danger">

                                                    {{$errors->first('price')}}
                                                    </div>

                                                    @endif
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">images</span></div>
                                                        <input placeholder="pic" type="file"  name="file" class="form-control"></div>
                                                
                                                   </div>


                                                  
                                            <br>
                                            <br>


                                                @if($errors->first('file') and !empty($errors->first('file')))

                                                <div class="alert alert-danger">

                                                {{$errors->first('file')}}
                                                </div>

                                                @endif


                                            <button type="submit" class=" btn btn-primary btn-lg col-md-6 ">Ajouter l'article </button>
                                        </div>

                                    </form>

</div>


</div>

</div>


@stop