@extends('layouts.app')

@section('content')
<div class="bg-light w-50 rounded-5 text-center">
<h1>Inscrivez-vous</h1>

<form action="{{route('StoreInscrire')}}" method="POST" class=" text-center m-5">
    @csrf
    <div class="mb-3">
        <input type="text" name="nom" placeholder="Nom"  class="form-control rounded-5" required>
    </div>
    <div class="mb-3">
    <input type="email" name="email" placeholder="Email"  class="form-control rounded-5" required>
    </div>
    
    <div class="mb-3">
    <input type="password" name="password" placeholder="Mot de Pass"  class="form-control rounded-5" required>


    </div>
    <button type="submit " class="btn btn-success" >Valider la commande</button>

</form>

</div>



@endsection