<link rel="stylesheet" type="text/css" href="{{ asset('css/pack.css') }}">

@extends('layouts.app')

@section('content')
 


                {{-- //_______ --}}
                
                <div class="row p-2 bg-white border rounded mt-2">
    @foreach ($produits as $produit)


                    <div class="col-md-3 mt-1">
                        <img class="img-fluid img-responsive rounded product-image" src="{{ asset($produit->image) }}" alt="...">
                    </div>
                    <div class="col-md-6 mt-1 ">
                        <h3>{{ $produit->nom }}</h3>
                        
                        
                        <p class="text-justify text-truncate para mb-0">{{ $produit->description }}<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-5">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">{{ $produit->prix }}</h4><span class="strike-text"> $21.99</span>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4">
                            
                            <a href="{{ route('produitDetail', $produit->id) }}" class="btn btn-primary btn-sm ">Details </a> 
                                
                               
                
                           
                            <form action="{{ route('ajouterPanier') }}" method="POST" style="margin-top: 20px">
                                @csrf  
                               <input type="hidden" name="produit_id" value="{{$produit->id}}">
                               <input type="hidden" name="produit_prix" value="{{$produit->prix}}">
           
                              
                               <input type="number" name="quantite" value="1" min="1" id="quantitepack" >
                   
                               <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                           </form> 
                            
                           

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
