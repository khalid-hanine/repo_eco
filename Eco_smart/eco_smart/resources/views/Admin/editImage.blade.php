@extends('layouts.appAdmin')

@section('ContentAdmin')

<form method="POST" action="{{route('image.update',$image->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')  
    <div class="mb-3">
        <div class="mb-3">
            <label class="form-label">Image actuelle</label><br>
            @foreach($imageDB as $img)
            <img src="{{ asset( $img ->images) }}" alt="Image du produit" style="max-width: 200px;">
            @endforeach  
        </div>
        <label class="form-label">Importer une image</label>
        <input type="file" class="form-control" name="image" >
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection