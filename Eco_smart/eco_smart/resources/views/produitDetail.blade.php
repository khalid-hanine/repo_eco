
<link rel="stylesheet" type="text/css" href="{{ asset('css/produitDetail.css') }}">

@extends('Layouts.app')

@section('content')


{{-- _____________________ --}}
<div id="alert-container" class="alert-container">
    @if(session('success'))
    <div id="alert" class="alert show">
        {{ session('success') }}
    </div>
    @endif
</div>
<div class="row m-5 h-50  p-2 " >
    
    <div class="col-lg-2 col-md-2 col-sm-4 ">
        <div class=" thumbnail-container ">
            <div class="thumbnail  " onclick="changeImage('{{ asset($produit->image) }}')">
               <img src="{{ asset($produit->image) }}" class=" w-100  img" alt="..." > 
            </div>
        
            <div class="thumbnail " onclick="changeImage('{{ asset($produit->image2) }}')">
                <img src="{{ asset($produit->image2) }}" class="w-100  img " alt="...">
            </div>
        </div>
    </div>
        <div class=" col-lg-4 col-md-4 col-sm-10">
            <div >
                <img id="mainImage" src="{{ asset($produit->image2) }}" class="w-100   img-principal" alt="...">
            </div>
          
            
        </div>   

        <div class="col-md-6 ps-5">
            <div class="product-details">
                <h2 class="titleD">{{$produit->nom}}</h2>
                <p class="descriptionD">{{$produit->description}}</p>
                <p class="priceD">{{$produit->prix}} DH</p>
                <p>{{$produit->prixRemise}}</p>
                <form action="{{ route('ajouterPanier') }}" method="POST">
                    @csrf  
                    <input type="hidden" name="produit_id" value="{{$produit->id}}">
                    <input type="hidden" name="produit_prix" value="{{$produit->prix}} ">
                    <div class="form-group">
                        <label for="quantite">Quantité</label>
                        <input type="number" name="quantite" value="1" min="1" class="form-control" id="quantite"> 
                    </div>
                    <button type="submit" class="btn btn-warning btn-block add-to-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg> Ajouter au panier
                    </button>
                </form>
            </div>
        </div>
        

</div>

@foreach ($produitsFromDB as $produit)
    <div class="card col-3" style="width: 18rem;" id="divCard">
        <a href="{{ route('produitDetail', $produit->id) }}">
            <img class="card-img-top" src="{{ asset($produit->image) }}" alt="...">
        </a> 
        <div class="card-body">
            <h5 class="card-title title">{{ $produit->nom }}</h5>
            <p class="card-text description">{{ $produit->description }}</p> 
            <p class="card-text price">{{ $produit->prix }}</p> 
            <form action="{{ route('ajouterPanier') }}" method="POST">
                @csrf  
                <div class="form-group">
                    <input type="number" name="quantite" value="1" min="1" class="form-control" id="quantite">
                </div>
                <button type="submit" class="btn btn-warning btn-block add-to-cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg> Ajouter au panier
                </button>
            </form> 
        </div>
    </div>
@endforeach
<div>
    <a href="{{route('produits')}}" class="btn btn-dark text-light" id="voirPlus">Voir plus</a>
</div>




    <script>
        function changeImage(newSrc) {
    document.getElementById('mainImage').src = newSrc;
}

    </script>
    {{-- ________________ --}}
   
@endsection