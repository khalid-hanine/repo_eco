@extends('layouts.app')

@section('content')
<div id="alert-container" class="alert-container">
    @if(session('success'))
    <div id="alert" class="alert show">
        {{ session('success') }}
    </div>
    @endif
</div>
{{-- //_____ --}}


<main>

    <section class="containner">
        <img src="{{ asset('images/produits/cover.png') }}" class="d-block w-100" alt="Logo">
        
        
    <section>
        <h1 class="text-center mb-4">NOT PRODUITS</h1>

 <div class="row"> 

  @foreach ($produits as $produit)
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

                  
                    <input type="number" name="quantite" value="1" min="1">
        
                    <button type="submit" class="btn btn-warning">Ajouter au panier</button>
                </form> 
            </div>
        </div>
    @endforeach

  
    <a href="{{route('produits')}}" class="btn btn-dark text-light">Voir plus</a>
    {{-- //________________ --}}
    @foreach ($pack as $produit)
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

                    
                    <input type="number" name="quantite" value="1" min="1">
        
                    <button type="submit" class="btn btn-warning">Ajouter au panier</button>
                </form> 
            </div>
        </div>
    @endforeach
    <a href="{{route('pack')}}" class="btn btn-dark text-light">Voir plus</a>

@endsection
