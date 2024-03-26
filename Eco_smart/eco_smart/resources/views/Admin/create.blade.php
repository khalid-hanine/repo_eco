@extends('Layouts.appAdmin')

@section('title') 
Create 
@endsection

@section('ContentAdmin')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('objet.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" rows="3" name="description">{{ old('description') }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" name="image" value="{{ old('image') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Image 2</label>
        <input type="file" class="form-control" name="image2" value="{{ old('image2') }}">
    </div><div class="mb-3">
        <label class="form-label">Image 3</label>
        <input type="file" class="form-control" name="image3" value="{{ old('image3') }}">
    </div>
    <div>
        <h2>Type de produit:</h2>
        <input type="radio" id="pack" name="type" value="pack" {{ old('type') == 'pack' ? 'checked' : '' }}>
        <label for="pack">Pack</label>
        <br>
        <input type="radio" id="produit" name="type" value="produit"  {{ old('type') == 'produit' ? 'checked' : '' }}>
        <label for="produit">Produit</label>
        <br>
        <input type="radio" id="accessoire" name="type" value="accessoire"  {{ old('type') == 'accessoire' ? 'checked' : '' }}>
        <label for="produit">accessoire</label>
    </div>
    <div>
        <h2>Type de secteur:</h2>
        <input type="radio" id="cafe" name="typeS" value="cafe" {{ old('typeS') == 'cafe' ? 'checked' : '' }}>
        <label for="pack">Cafe</label>
        <br>
        <input type="radio" id="boulangerie" name="typeS" value="boulangerie"  {{ old('typeS') == 'boulangerie' ? 'checked' : '' }}>
        <label for="produit">boulangerie</label>
        <br>
        <input type="radio" id="CentreB" name="typeS" value="CentreB"  {{ old('typeS') == 'CentreB' ? 'checked' : '' }}>
        <label for="produit">Centre beauté</label>
        <br>
        <input type="radio" id="coiffeur" name="typeS" value="coiffeur"  {{ old('typeS') == 'coiffeur' ? 'checked' : '' }}>
        <label for="produit">coiffeur</label>
        <br>
        <input type="radio" id="boucherie" name="typeS" value="boucherie"  {{ old('typeS') == 'boucherie' ? 'checked' : '' }}>
        <label for="produit">boucherie</label>
        <br>
        <input type="radio" id="supermarche" name="typeS" value="supermarche"  {{ old('typeS') == 'supermarche' ? 'checked' : '' }}>
        <label for="produit">supermarche</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Prix</label>
        <input type="text" class="form-control" name="prix" value="{{ old('prix') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Prix_Remise</label>
        <input type="text" class="form-control" name="prixRemise" value="{{ old('prixRemise') }}">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
