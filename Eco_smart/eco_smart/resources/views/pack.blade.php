<link rel="stylesheet" type="text/css" href="{{ asset('css/pack.css') }}">

@extends('layouts.app')

@section('content')
<div id="alert-container" class="alert-container">
    @if(session('success'))
    <div id="alert" class="alert show">
        {{ session('success') }}
    </div>
    @endif
</div>

    @foreach ($produits as $produit)
        <div class="row" >
             <a href="{{ route('produitDetail', $produit->id) }}" class="col-6">
                {{-- <img class="card-img-top" src="{{ asset("images/produits/img4.png") }}" alt="..."> --}}
                <img class="card-img-top" src="{{ asset($produit->image) }}" alt="..." id="imgpack">

            </a> 
            <div class="col-6">
               

                <h5 class="nom">{{ $produit->nom }}</h5>
                <p class="description">{{ $produit->description }}</p> 
                <p class="prix">{{ $produit->prix }}</p> 

                
                <form action="{{ route('ajouterPanier') }}" method="POST">
                     @csrf  
                    <input type="hidden" name="produit_id" value="{{$produit->id}}">
                    <input type="hidden" name="produit_prix" value="{{$produit->prix}}">

                   
                    <input type="number" name="quantite" value="1" min="1" id="quantitepack">
        
                    <button type="submit" class="btn btn-warning">Ajouter au panier</button>
                </form> 
            </div>
        </div>
    @endforeach

@endsection
