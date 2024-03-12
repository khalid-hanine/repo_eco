@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    @foreach ($produits as $produit)
        <div class="card col-3" style="width: 18rem;">
            <a href="{{ route('produits.show', $produit->id) }}">
                <img class="card-img-top" src="{{ asset($produit->image) }}" alt="...">
            </a>
            <div class="card-body">
                <h2 class="card-title">{{ $produit->id }}</h2>

                <h5 class="card-title">{{ $produit->title }}</h5>
                <p class="card-text">{{ $produit->description }}</p>
                
                <form action="{{ route('createCommande', $produit->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning">Ajouter au panier</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
