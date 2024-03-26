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
           
                <img src="{{ asset( $produit->image) }}" alt="Image du produit" style="max-width: 200px;">
                <img src="{{ asset( $produit->image2) }}" alt="Image du produit" style="max-width: 200px;">
                <img src="{{ asset( $produit->image3) }}" alt="Image du produit" style="max-width: 200px;">
                
        </div>
        <label class="form-label">Importer une image</label>
        <input type="file" class="form-control" name="image" >
        <input type="file" class="form-control" name="image2" >
        <input type="file" class="form-control" name="image3" >


    </div>
    <div>
        <p>Type de produit:</p>
        <input type="radio" id="pack" name="type" value="pack" @if($produit->type == 'pack') checked @endif>
        <label for="pack">Pack</label>
        <br>
        <input type="radio" id="produit" name="type" value="produit" @if($produit->type == 'produit') checked @endif>
        <label for="produit">Produit</label>
        <br>
        <input type="radio" id="accessoire" name="type" value="accessoire"  @if($produit->type == 'accessoire') checked @endif  >
        <label for="produit">accessoire</label>
    </div>
    <div>
        <h2>Type de secteur:</h2>
        <input type="radio" id="cafe" name="typeS" value="cafe" @if($produit->typeS == 'cafe') checked @endif >
        <label for="pack">Cafe</label>
        <br>
        <input type="radio" id="boulangerie" name="typeS" value="boulangerie" @if($produit->typeS == 'boulangerie') checked @endif >
        <label for="produit">boulangerie</label>
        <br>
        <input type="radio" id="CentreB" name="typeS" value="CentreB" @if($produit->typeS == 'CentreB') checked @endif >
        <label for="produit">Centre beauté</label>
        <br>
        <input type="radio" id="coiffeur" name="typeS" value="coiffeur" @if($produit->typeS == 'coiffeur') checked @endif >
        <label for="produit">coiffeur</label>
        <br>
        <input type="radio" id="boucherie" name="typeS" value="boucherie" @if($produit->typeS == 'boucherie') checked @endif >
        <label for="produit">boucherie</label>
        <br>
        <input type="radio" id="supermarche" name="typeS" value="supermarche" @if($produit->typeS == 'supermarche') checked @endif >
        <label for="produit">supermarche</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Prix</label>
        <input type="text" class="form-control" name="prix" value="{{$produit->prix}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Prix_Remise</label>
        <input type="text" class="form-control" name="prixRemise"  value="{{$produit->prixRemise}}">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
