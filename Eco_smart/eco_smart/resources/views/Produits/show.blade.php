@extends('Layouts.app')

@section('content')
<div class="row ">
    <div class="col-6">
        <img src="{{ asset($produit->image) }}" class="" alt="...">

    
    </div>
    <div class="col-6">
        <h2>{{$produit->title}}</h2>
        <h3>{{$produit->description}}</h3>
        <h1>{{$produit->prix}}</h1>

        <a class="btn btn-warning">Ajouter au panier</a>
        <a class="btn btn-secondary">commander</a>

    </div>


</div>

@endsection