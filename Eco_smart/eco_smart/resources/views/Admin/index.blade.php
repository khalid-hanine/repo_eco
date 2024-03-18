@extends('layouts.appAdmin')

@section('ContentAdmin')
<div style="margin-left:70%">
    <a href="{{route('Admin.create')}}" class="btn btn-success">Ajouter produit</a>
         
    </div> 
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">image</th>
        <th scope="col">nom</th>
        <th scope="col">description</th>
        <th scope="col">prix</th>
        <th scope="col">action</th>


      </tr>
    </thead>
    <tbody class="table-group-divider">
      <tr>
        @foreach($produits as $produit)  
        {{-- @dd($posts,$post); --}}
        <tr>
          <td>{{$produit->id}}</td>
          <td ><img src={{$produit->image}} alt=".." class="img-fluid" style="max-width: 100px; height: auto;"  /></td>
          <td>{{$produit->nom}}</td>

          <td>{{$produit->description}}</td>
          <td>{{$produit->prix}}</td>
          {{-- //_________ --}}

           

           
          <td>
             
            
            <a href="{{route('produits.edit',$produit->id)}}" class="btn btn-primary">Edit</a>

            <form method="POST" action="{{route('objets.destroy',$produit->id)}}"  style="display: inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce post?')">
              @csrf
              @method('delete')
              
            <button type='submit' class="btn btn-danger">Delete</button>
                   
            </form> 
          </td>
        </tr>
            
        @endforeach
      </tr>
      
    
    </tbody>
  </table>
@endsection