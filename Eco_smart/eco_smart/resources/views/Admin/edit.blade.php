@extends('Layouts.appAdmin')

@section('title') 
edit
@endsection

@section('ContentAdmin')

{{-- @dd($produit); --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('produits.update',$produit->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')  {{-- @method  comme un changement de methode par ce que la methode de form html n'accepte que POST et GET --}}

    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" value="{{$produit->nom}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" rows="3" name="description">{{ $produit->description}}</textarea>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <label class="form-label">Image actuelle</label><br>
            @if($produit->image)
                <img src="{{ asset( $produit->image) }}" alt="Image du produit" style="max-width: 200px;">
            @else
                <p>Aucune image disponible</p>
            @endif
        </div>
        <label class="form-label">Importer une image</label>
        <input type="file" class="form-control" name="image" >
    </div>
    <div>
        <p>Type de produit:</p>
        <input type="radio" id="pack" name="type" value="pack" @if($produit->type == 'pack') checked @endif>
        <label for="pack">Pack</label>
        <br>
        <input type="radio" id="produit" name="type" value="produit" @if($produit->type == 'produit') checked @endif>
        <label for="produit">Produit</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Prix</label>
        <input type="text" class="form-control" name="prix" value="{{$produit->prix}}">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
