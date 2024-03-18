@extends('Layouts.app')

@section('content')
<div id="alert-container" class="alert-container">
    @if(session('success'))
    <div id="alert" class="alert show">
        {{ session('success') }}
    </div>
    @endif
</div>

<div class="row m-5 " >
    <div class="col-6  ">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset($produit->image2) }}" class="w-75 h-50" alt="...">
                <img src="{{ asset($produit->image3) }}" class="w-75 h-50" alt="...">


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
@foreach ($produitsFromDB as $produit)
        <div class="card col-3" style="width: 18rem;">
             <a href="{{ route('produitDetail', $produit->id) }}">
                {{-- <img class="card-img-top" src="{{ asset("images/produits/img4.png") }}" alt="..."> --}}
                <img class="card-img-top" src="{{ asset($produit->image) }}" alt="...">

            </a> 
            <div class="card-body">
                

                <h5 class="card-title">{{ $produit->nom }}</h5>
                <p class="card-text">{{ $produit->description }}</p> 
                <p class="card-text">{{ $produit->prix }}</p> 

                
                <form action="{{ route('ajouterPanier') }}" method="POST">
                     @csrf  
                    <input type="hidden" name="produit_id" value="{{$produit->id}}">
                    <input type="hidden" name="produit_prix" value="{{$produit->prix}}">

                    <label>quantite</label>
                    <input type="number" name="quantite" value="1" min="1">
        
                    <button type="submit" class="btn btn-warning">Ajouter au panier</button>
                </form> 
            </div>
        </div>
    @endforeach
    <a href="{{route('produits')}}" class="btn btn-dark text-light">Voir plus</a>



@endsection