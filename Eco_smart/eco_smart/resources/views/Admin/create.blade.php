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
        <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label class="form-label">Prix</label>
        <input type="text" class="form-control" name="prix" value="{{ old('prix') }}">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
