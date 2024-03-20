@extends('layouts.app')

@section('content')

<div class="bg-light w-50 rounded-5 text-center">
    <h1>Connectez-vous</h1>
    
    <form action="{{route('loginUser')}}" method="POst" class=" text-center m-5">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" placeholder="Nom" required class="form-control rounded-5">
        </div>
        
        <div class="mb-3">
        <input type="password" name="password" placeholder="Mot de Pass" required class="form-control rounded-5">
    
    
        </div>
        <button type="submit " class="btn btn-success" >Valider la commande</button>
    <a href="{{route('inscrire')}}" class="btn btn-info w-25">Inscrire</a>

    </form>
    
    </div>


@endsection