
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/acceuil.css') }}">

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
        <img src="{{ asset('images/produits/cover.png') }}" class="d-block w-100" alt="Logo" id="cover">
        
        
    <section>
        <h1 class="text-center mb-4" id='titleProduit'>NOT PRODUITS</h1>

 <div class="row"> 

  @foreach ($produits as $produit)
        <div class="card col-2" style="width: 15rem;" id="divCard">
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

                  
                    <input type="number" name="quantite" value="1" min="1" id="quantite">
        
                    <button type="submit" class="btn btn-warning" ><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg></button>
                </form> 
            </div>
        </div>
    @endforeach

  <div>
    <a href="{{route('produits')}}" class="btn btn-dark text-light" id="voirPlus">Voir plus</a>


  </div>
    {{-- //________________ --}}
    @foreach ($pack as $produit)
        <div class="row" >
             <a href="{{ route('produitDetail', $produit->id) }}" class="col-6" >
                {{-- <img class="card-img-top" src="{{ asset("images/produits/img4.png") }}" alt="..."> --}}
                <img class="card-img-top " src="{{ asset($produit->image) }}" alt="..." id="imgpack">

            </a> 
            <div class="col-6">
                

                <h5 class="nom">{{ $produit->nom }}</h5>
                <p class="descreption">{{ $produit->description }}</p> 
                <p class="prix">{{ $produit->prix }}</p> 

                
                <form action="{{ route('ajouterPanier') }}" method="POST">
                     @csrf  
                    <input type="hidden" name="produit_id" value="{{$produit->id}}">
                    <input type="hidden" name="produit_prix" value="{{$produit->prix}}">

                    
                    <input type="number" name="quantite" value="1" min="1" id="quantitepack" >
        
                    <button type="submit"  id="ajouterAuPanier" >Ajouter au panier</button>
                </form> 
            </div>
        </div>
    @endforeach
    <div>
    <a href="{{route('pack')}}" class="btn btn-dark text-light" id="voirPlus">Voir plus</a>


    </div>

@endsection
