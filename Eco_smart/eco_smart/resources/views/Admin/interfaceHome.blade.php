@extends('layouts.appAdmin')

@section('ContentAdmin')
<h1>Cover</h1>
@foreach($cover as $img)
    <div class=" col-md-4 ">
        <div class="card mb-3">
            <img src="{{ asset($img->images) }}" class="card-img-top" alt="...">
            <div class="card-body">
              
                <a href="{{route('editImage', $img->id)}}" class="btn btn-primary">edit</a>
            </div>
        </div>
    </div>
    @endforeach
<h1>Slide Image</h1>
<div class="row">
    @foreach($slide as $img)
    <div class=" col-md-4 ">
        <div class="card mb-3" >
            <img src="{{ asset($img->images) }}" class="card-img-top" alt="...">
            <div class="card-body">
              
                <a href="{{route('editImage', $img->id)}}"  class="btn btn-primary">edit</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
