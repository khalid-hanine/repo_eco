@extends('Layouts.app')

@section('content')

<div class="row m-5 " >
    <div class="col-6  ">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset($produit->image) }}" class="w-75 h-25" alt="...">
                <img src="{{ asset($produit->image) }}" class="w-75" alt="...">
                <img src="{{ asset($produit->image) }}" class="w-75" alt="..."> 


            </div>
           <img src="{{ asset($produit->image) }}" class="w-50  col-3" alt="..."> 
        </div>
         

    
    </div>
    
    <div class="col-6">
        <h2>{{$produit->nom}}</h2>
        <h3>{{$produit->description}}</h3>
        <h1>{{$produit->prix}}</h1>

        <form action="{{ route('ajouterPanier') }}" method="POST">
            @csrf  
           <input type="hidden" name="produit_id" value="{{$produit->id}}">
           <input type="hidden" name="produit_prix" value="{{$produit->prix}}">

           <label>quantite</label>
           <input type="number" name="quantite" value="1" min="1">

           <button type="submit" class="btn btn-warning">Ajouter au panier</button>
       </form> 
        <a class="btn btn-secondary">commander</a>

    </div>


</div>



@endsection