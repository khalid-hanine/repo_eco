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
        <p>Type de produit:</p>
        <input type="radio" id="pack" name="type" value="pack" {{ old('type') == 'pack' ? 'checked' : '' }}>
        <label for="pack">Pack</label>
        <br>
        <input type="radio" id="produit" name="type" value="produit"  {{ old('type') == 'produit' ? 'checked' : '' }}>
        <label for="produit">Produit</label>
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
