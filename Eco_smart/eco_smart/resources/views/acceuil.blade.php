
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/acceuil.css') }}">

@extends('layouts.app')

@section('content')
<div id="alert-container" class="alert-container">
    @if(session('success'))
    <div id="alert" class="alert show">
        {{ session('success') }}
    </div>
    @endif
</div>
{{-- //_____ 


<main>

    <section class="containner">
        {{-- <img src="{{ asset('images/produits/cover.png') }}" class="d-block w-100" alt="Logo" id="cover"> 
        @foreach($cover as $profil) 
        <img src="{{ asset($profil->images) }}" class="d-block w-100" alt="Logo" id="cover">
        @endforeach
        <br>
        
        <h1 class="text-center mt-4">les activites</h1>

        <div id="carouselExampleDark" class="carousel w-50  carousel-dark slide mt-45" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                
            </div>
            <div class="carousel-inner">
                @foreach($slide as $profil) 
                <div class="carousel-item  active" data-bs-interval="2000">
                    <img src="{{ asset($profil->images) }}" class="d-block " alt="">
                </div>
                @endforeach
                {{-- <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('images/produits/img2.jpg') }}" class="d-block " alt="">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('images/produits/img3.jpg') }}" class="d-block " alt="">
                </div> --
            </div>
            <button class="   carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class=" bg-primary carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="bg-primary visually-hidden">Previous</span>
            </button>
            <button class="  carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class=" bg-primary carousel-control-next-icon" aria-hidden="true"></span>
                <span class=" bg-primary visually-hidden">Next</span>
            </button>
        </div><br>
        
    <section>
        <div class="container">
            <h1>Secteurs</h1>
            <div class="row">
               

            @foreach($secteurs as $secteur)
            
            <a href="{{route('secteur',$secteur->id)}}"><img class="col-4 p-2 " src="{{ asset($secteur->imageSecteur) }}" alt="..."></a>
                   

            @endforeach
 
                </div>
            


        </div>
        <h1 class="text-center mb-4" id='titleProduit'>NOT PRODUITS</h1>

 <div class="row"> 

  @foreach ($produits as $produit)
        <div class="card col-2" style="width: 15rem;" id="divCard">
             <a href="{{ route('produitDetail', $produit->id) }}">
                {{-- <img class="card-img-top" src="{{ asset("images/produits/img4.png") }}" alt="..."> 
                <img class="card-img-top" src="{{ asset($produit->image) }}" alt="...">

            </a> 
            <div class="card-body">
               

                <h5 class="card-title">{{ $produit->nom }}</h5>
                <p class="card-text">{{ $produit->description }}</p> 
                <p class="card-text">{{ $produit->prix }}</p> 

                
                <form action="{{ route('ajouterPanier') }}" method="POST">
                     @csrf  
                    <input type="hidden" name="produit_id" value="{{$produit->id}}">
                    <input type="hidden" name="produit_prix" value="{{$produit->prix}}">

                  
                    <input type="number" name="quantite" value="1" min="1" id="quantite">
        
                    <button type="submit" class="btn btn-warning" ><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg></button>
                </form>
                <a class="btn  text-light rounded-3" id="btnComander" href="{{route('connecterIDproduit',$produit->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="30" viewBox="0 0 48 48">
                    <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                    </svg></a>  
            </div>
        </div>
    @endforeach

  <div>
    <a href="{{route('produits')}}" class="btn btn-dark text-light" id="voirPlus">Voir plus</a>


  </div>
    {{-- //________________ 
    @foreach ($pack as $produit)
        <div class="row" >
             <a href="{{ route('produitDetail', $produit->id) }}" class="col-6" >
                {{-- <img class="card-img-top" src="{{ asset("images/produits/img4.png") }}" alt="..."> 
                <img class="card-img-top " src="{{ asset($produit->image) }}" alt="..." id="imgpack">

            </a> 
            <div class="col-6">
                

                <h5 class="nom">{{ $produit->nom }}</h5>
                <p class="descreption">{{ $produit->description }}</p> 
                <p class="prix">{{ $produit->prix }}</p> 

                
                <form action="{{ route('ajouterPanier') }}" method="POST">
                     @csrf  
                    <input type="hidden" name="produit_id" value="{{$produit->id}}">
                    <input type="hidden" name="produit_prix" value="{{$produit->prix}}">

                    
                    <input type="number" name="quantite" value="1" min="1" id="quantitepack" >
        
                    <button type="submit"  id="ajouterAuPanier" >Ajouter au panier</button>
                </form> 
                <a class="btn  text-light rounded-3" id="btnComander" href="{{route('connecterIDproduit',$produit->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="30" viewBox="0 0 48 48">
                    <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                    </svg></a> 
            </div>
        </div>
    @endforeach
    <div>
    <a href="{{route('pack')}}" class="btn btn-dark text-light" id="voirPlus">Voir plus</a>


    </div>

{{-- @endsection  --}}
{{-- //______________________________________________________________________________________________ --}}

<link rel="stylesheet" type="text/css" href="{{ asset('css/acceuil.css') }}">

@extends('layouts.app')

@section('content')
<div id="alert-container" class="alert-container">
    @if(session('success'))
    <div id="alert" class="alert show">
        {{ session('success') }}
    </div>
    @endif
</div>





<main>



   
<div>
 @foreach($cover as $profil)
        <img src="{{ asset($profil->images) }}"   class="img-fluid w-100 mt-2" alt="Logo" >
        @endforeach
        

</div>
 

    




<h1 class="text-center mt-4">les activites</h1>

        <div id="carouselExampleDark" class="carousel w-50  carousel-dark slide mt-45" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 5"></button>

            </div>
            <div class="carousel-inner">
                @foreach($slide as $profil)
                <div class="carousel-item  active" data-bs-interval="2000">
                    <img src="{{ asset($profil->images) }}" class="d-block " alt="">
                </div>
                @endforeach
                {{-- <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('images/produits/img2.jpg') }}" class="d-block " alt="">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('images/produits/img3.jpg') }}" class="d-block " alt="">
                </div> --}}
            </div>
            <button class="   carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class=" bg-primary carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="bg-primary visually-hidden">Previous</span>
            </button>
            <button class="  carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class=" bg-primary carousel-control-next-icon" aria-hidden="true"></span>
                <span class=" bg-primary visually-hidden">Next</span>
            </button>
        </div><br>

    
        <div class="container">
            <h2 style="text-align:center">Choisissez votre activité   </h2>
            <h3 style="text-align:center">   قم باختيار نشاطك التجاري</h3>
            <div class="row" id="secteur">
                @foreach($secteurs as $index => $secteur)
                    <div class="col-4">
                        <a href="{{ route('secteur', $secteur->id) }}">
                            <img class="img-fluid p-1 imgSecteur" src="{{ asset($secteur->imageSecteur) }}" alt="...">
                        </a>
                    </div>
                    @if(($index + 1) % 3 == 0)
                        </div><div class="row">
                    @endif
                @endforeach
            </div>
        </div>
        











<div class="product-section">
    <div class="container">
        <h1 class="text-center mb-4" id='titleProduit'>Nos produits</h1>
        <div class="row" >

            <!-- Start Column 1 -->
            @foreach ($produits as $produit)
            <div  class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">

                <div class="product-item">
                    <a href="{{ route('produitDetail', $produit->id) }}">
                    <img src="{{ asset($produit->image) }}" class="img-fluid product-thumbnail "></a>
                    <h3 class="product-title">{{ $produit->nom }}</h3>
                    <strong class="product-price">{{ $produit->prix }} DH</strong>
                    <form action="{{ route('ajouterPanier') }}" method="POST">
                            @csrf
                            <span class="button-group">
                                <input type="hidden" name="produit_id" value="{{$produit->id}}">
                                <input type="hidden" name="produit_prix" value="{{$produit->prix}}">
                                <input type="hidden" name="quantite" value="1" min="1" id="quantite">
                                <button type="submit" class="btn submit-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="30px" fill="yellow" class="bi bi-cart" id="bicon" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-secondary wts-btn">
                                    <a   href="{{route('connecterIDproduit',$produit->id)}}"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="30" viewBox="0 0 48 48">
                                        <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                                        </svg></a>
                                </button>
                            </span> </form>
                </div>

            </div>
            @endforeach

            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">SMART CAISSE.</h2>
                <p class="mb-4">Decouvrire autre accessoires. </p>
                <button style="background-color: rgb(255, 255, 0); border-radius:30px; width:110px;height:30px;margin-top:5%;margin-left:45%;"><a href="{{ route('produits') }}" >voirPlus</a></button>
            </div>





        </div>
    </div>
</div>

{{-- --}}





    <section >


        <div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">les activites</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">
							<div id="testimonial-nav">
								<span class="prev" data-controls="prev" ><</span>
								<span class="next" data-controls="next">></span>
							</div>
							<div class="testimonial-slider">
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">
											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Nous Aidons Tout Les Activiés.&rdquo;</p>
												</blockquote>
												<div class="author-info">
													<div class="author-pic">
														<img src="{{ asset('images/secteur/supermarche.jpg') }}"  alt="Maria Jones" class="img-fluid">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>





        <br>







    </div>
    <div class="pack-section">
        <div class="container">
            <h1 class="text-center mb-4" id='titleProduit'>NOs PACKS</h1>
    <div class="row">


        {{-- //__ --}}
        @foreach ($pack as $produit)
        <div  class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <div class="pack-item">

                 <a href="{{ route('produitDetail', $produit->id) }}" class="col-6" >

                    <img  src="{{ asset($produit->image) }}" class="img-fluid pack-thumbnail">

                </a>
                <div class="col-6">


                    <h3 class="pack-title">{{ $produit->nom }}</h3>

                    <strong class="pack-price">{{ $produit->prix }} DH</strong>


                    <form action="{{ route('ajouterPanier') }}" method="POST">
                         @csrf
                         <span class="icon-cross">
                        <input type="hidden" name="produit_id" value="{{$produit->id}}">
                        <input type="hidden" name="produit_prix" value="{{$produit->prix}}">
                        <input type="hidden" name="quantite" value="1" min="1" id="quantite">




                        <button type="submit" class="btn " ><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="30px" fill="WHITE" class="bi bi-cart" id="bicon" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg></button>
                        <button type="button" class="btn btn-secondary wts-btn">
                            <a   href="{{route('connecterIDproduit',$produit->id)}}"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="30" viewBox="0 0 48 48">
                                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                                </svg></a>
                        </button>
                         </span>

                    </form>

            </div>
        </div>
        </div>
        @endforeach 
        <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
            <h2 class="mb-4 section-title">SMART CAISSE.</h2>
            <p class="mb-4">Decouvrire autre accessoires. </p>
            <button style="background-color: rgb(255, 255, 0); border-radius:30px; width:110px;height:30px;margin-top:5%;margin-left:45%;"><a href="{{ route('pack') }}" >voirPlus</a></button>
        </div>
        
        <br>
        <div>
            <button style="background-color: rgb(255, 255, 0); border-radius:30px; width:110px;height:30px;margin-top:5%;margin-left:40%;"><a href="{{ route('pack') }}" >voirPlus</a></button>


        </div>
    </div>
    </div>
    </div>

@endsection