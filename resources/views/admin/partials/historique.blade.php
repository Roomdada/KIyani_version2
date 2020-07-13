@extends('admin/home')
@section('content')
<div class="row">
                            
                            <div class="col-lg-12 ">
                                 <div class="alert alert-dark">
                                     <div class="row justify-content-center">
                                            <b> Historique(s)   </b>     @if(isset($article))  <span class="badge badge-primary">{{$article->count()}}</span> @endif
                                     </div>
                                 </div>

                                <div class="main-card mb-3 card  ">
                                    <div class="card-body"><h5 class="card-title ">Articles ajoutés</h5>

                                    @if(isset($article) and !empty($article) and $article!=null and $article->count()!=0) 
                                        <table class="mb-0 table table-responsive">
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
                                            @foreach($article as $index)
                                            <tr>
                                                
                                                <th scope="row">{{$index->id}}</th>
                                                <th scope="row">{{$index->categories}}</th>
                                                <th scope="row">{{$index->nom}}</th>
                                                <th scope="row">{{$index->quantity}}</th>
                                                <th scope="row">{{$index->price}} XOF</th>
                                                <th scope="row">{{$index->color}}</th>
                                                
                                                <th scope="row"><img src="{{$index->images}}" width="50" height="50"></th>
                                                <th>{{$index->created_at}}</th>
                                                <th>
                                                    <form action="/admin/historique/{{$index->id}}"  method="post"> 
                                                    @csrf
                                                    @method('DELETE')
                                                        <div class="btn-group">

                                                        <button type="submit" class="btn btn-danger">supprimer</button>
                                                        
                                                        </div>
                                                    </form>
                                                </th>
                                               
                                                
                                            </tr>

                                            @endforeach
                                            
                                            </tbody>

                                        </table>


                                        <div class="row justify-content-center">{{$article->links()}}</div>

                                    @else

                                       

                                          <div class="alert alert-primary">Aucun historique trouvé

                                          </div>


                                    @endif
                                    </div>
                                </div>
                            </div>
                           
                      </div>

@stop