
@extends('layouts.app')

@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">Produit</th>
        <th scope="col">title</th>

        <th scope="col">Prix</th>
        <th scope="col">Quantite</th>
        <th scope="col">total</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($commandes as $commande)
     <tr>
        <td>{{$commande->img_produit}}</td>

        
        <td>{{$commande->nom_produit}}</td>
        <td>{{$commande->prix}}</td>
        <td>{{$commande->quantite}}</td>
        <td>{{$commande->total}}</td>

      </tr>
        @endforeach
      
     
     
    </tbody>
  </table>

  @endsection