
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/produitDetail.css') }}">

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
        

    </div>


</div>
@foreach ($produitsFromDB as $produit)
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



@endsection