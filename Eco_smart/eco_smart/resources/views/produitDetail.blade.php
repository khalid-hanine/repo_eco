        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ECO SMART</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/produitDetail.css') }}">
            
        </head>
        <body>
        <div class="me">
                <nav class="navbar navbar-expand-sm navbar-light fixed-top">
        
                    <div class="container-fluid ">
                        <a href="#" class="navbar-brand ">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="90" height="80" style="margin-top: -13px;" class="d-inline-block fixed-top ms-5 ">
                        </a>
                        <button class="navbar-toggler" style="margin-top: -5px;" type="button" onclick="toggleMenu()" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse fixed-menu " id="navbarNav">
                            <ul class="navbar-nav me-auto mb-1  mb-lg-0 ">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('acceuil') }}">Acceuil</a>
                                </li>
                                <li class="nav-item ms-2">
                                    <a class="nav-link" href="{{ route('pack') }}" >Packs</a>
                                </li>
                                <li class="nav-item ms-2">
                                    <a class="nav-link" href="{{ route('produits') }}" >Produits</a>
                                </li>
                                <li class="nav-item ms-2">
                                    <a class="nav-link" href="{{ route('infos') }}" >Infos</a>
                                </li>
                            </ul>
                        <span id="cartCounter" class="counter-span text-center" style="background-color: #e92323; width:30px;border-radius:50%;color:rgb(238, 208, 208)">0</span>
                            
                            
        
                            <a class="nav-link" href="{{ route('panier') }}" id="addToCartButton">
        
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-cart " viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                </svg> 
                                
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        
        
        
            <div class="container-fluid justify-content-center align-items-center" id="contentSection">
        


        
        <div id="alert-container" class="alert-container mt-5" style="position: absolute;top:40px;right:40px;">
            @if(session('success'))
            <div id="alert" class="alert show">
                {{ session('success') }}
            </div>
            @endif
        </div>


    
        <div class="container p-5" id="containerDetail">

            <h1 class="text-center mb-4 mt-5" ></h1>
        <div class="row p-5" >



                
            <div class=" col-md-1 col-sm-4 col-xs-4 ">
                
                <div class="thumbnail  " onclick="changeImage('{{ asset($produit->image2) }}')">
                    <img   src="{{ asset($produit->image2) }}" class=" img" alt="..." >
                </div>
                <div class="thumbnail mb-0" onclick="changeImage('{{ asset($produit->image3) }}')">
                    <img  src="{{ asset($produit->image3) }}" class=" img  " alt="...">
                </div>
                <div class="thumbnail mb-0" onclick="changeImage('{{ asset($produit->image) }}')">
                    <img  src="{{ asset($produit->image) }}" class=" img  " alt="...">
                </div>
                </div>
                
                
                
            
                
            
            
            <div class="col-md-4 col-sm-8">
                <div class=" thumbnail-container ">
                    <div >
                        <img id="mainImage" src="{{ asset($produit->image) }}" class="w-100   img-principal" alt="...">
                    </div>


            </div>
            </div>
                

                <div class="col-md-5 col-sm-12  ">
                    <div class="product-details ps-2">
                        <h2 class="titleD">{{$produit->nom}}</h2>
                        <p class="descriptionD">{{$produit->description}}</p>
                        <p><span class="product-price">{{$produit->prixRemise}},00DH</span> <span class="strike-text">{{ $produit->prix }},00DH </span></p>
                        <form action="{{ route('ajouterPanier') }}" method="POST">
                            @csrf
                            <input type="hidden" name="produit_id" value="{{$produit->id}}">
                            <input type="hidden" name="produit_prix" value="{{$produit->prix}} ">
                            <div class="form-group">

                                <input type="hidden" name="quantite" value="1" min="1" class="form-control" id="quantite">
                            </div>
                            <button type="submit" class="btn submit-btn  w-25 btn-primary ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="30px" fill="white" class="bi bi-cart" id="bicon" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                </svg>
                            </button>
                            
                            <a  class="btn  text-light rounded-3 btn-success w-25 ms-5" href="{{route('connecterIDproduit',$produit->id)}}"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="30" viewBox="0 0 48 48">
                                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                                </svg></a>
                            
                        </form>
                    </div>
                
                </div>
                
                    
            </div>         
                    
        
                    


                


        </div>


        
        <div >
            <div class="product-section">
                <hr>
            <div class="container " style="margin-bottom: 10px">
                <h1 class="text-center mb-4" id='titleProduit'>Nos produits</h1>
                <div class="row" >

                    
                    @foreach ($produitsFromDB as $produit)
                    <div  class="col-12 col-md-4 col-lg-3 mb-5 mt-5 mb-md-0" style="margin-top: ">

                        <div class="product-item">
                            <a href="{{ route('produitDetail', $produit->id) }}">
                            <img src="{{ asset($produit->image) }}" class="img-fluid product-thumbnail"></a>
                            <h3 class="product-title">{{ $produit->nom }}</h3>
                            <p><span class="product-price">{{$produit->prixRemise}},00DH</span> <span class="strike-text">{{ $produit->prix }},00DH </span></p>

                            <form action="{{ route('ajouterPanier') }}" method="POST">
                                @csrf
                                <span class="button-group">
                                    <input type="hidden" name="produit_id" value="{{$produit->id}}">
                                    <input type="hidden" name="produit_prix" value="{{$produit->prix}}">
                                    <input type="hidden" name="quantite" value="1" min="1" id="quantite">
                                    <button type="submit" class="btn submit-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="30px" fill="white" class="bi bi-cart" id="bicon" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                        </svg>
                                    </button>
                                    <a  class="btn btn-secondary wts-btn" href="{{route('connecterIDproduit',$produit->id)}}"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="30" viewBox="0 0 48 48">
                                        <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                                        </svg></a>
                                </span> </form>


                        </div>

                    </div>
                    @endforeach

                    <div class="col-md-12 col-lg-3 mb-5 mt-5 mb-lg-0">
                        <h2 class="mb-4 section-title">SMART CAISSE.</h2>
                        <p class="mb-4">Decouvrire autre produits. </p>


        <button style="background-color: rgb(255, 255, 0); border-radius:30px; width:200px;height:50px;margin-top:5%;margin-left:15%;  font-size: 20; font-weight:bold ;
        "><a href="{{ route('produits') }}" >Voir plus</a></button>
                    </div>





                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>










    <footer class="footer-section" style=" margin-top:10px ;" id="foter">
    <hr>

    <div class="container ">
    <div class="row g-5 mb-5">
        <div class=" col-md-4 col-sm-6 footer-logo-wrap">
            
                <a href="#" class="footer-logo ">SMART CAISSE</a>
                <p class="mb-4 ">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

            
                
        </div>

        <div class="col-md-3 col-sm-6 links-wrap">
            
                    <ul class="list-unstyled">
                        <h3 class="">Quick Links</h3>
                        <li><a  href="{{ route('acceuil') }}">-Acceuil</a></li>
                        <li><a  href="{{ route('pack') }}">-Packs</a></li>
                        <li><a  href="{{ route('produits') }}">-Produits</a></li>
                        <li><a  href="{{ route('infos') }}">-Infos</a></li>
                    </ul>
                </div>
    <div class="  col-md-3 col-sm-8  mb-4">
                    <ul class="list-unstyled">
                        <h3>Contact</h3>
                        <li > <span style="color: #31c3f4; wirth:24px; height:24px;">&#9742;</span> +212661-144882</li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M0 0h24v24H0z" fill="none"/> <path fill=" #31c3f4" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 1.99 2H20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg> smartcaissebm@gmail.com</li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path fill=" #31c3f4" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>  OULAD HAMDAN BM</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-12">
                    <ul class="list-unstyled">
                        <h3>follow Us</h3>
                        <ul class="list-unstyled custom-social">
                            <li><a href="https://www.facebook.com/SMARTCaissebenimellal"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                            <li><a href="https://www.instagram.com/smart.caisse/"><span class="fa fa-brands fa-instagram"></span></a></li>
                        </ul>
                    </ul>
                </div>
            
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-4">
        </div>
        <div class="col-md-6 text-md-right">
            <p class="mb-1 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved by  <span style="color: #FFD700;">SMART</span><span style="color: #31c3f4;"> CAISSE</span> &mdash; Designed with love by <SPan style="color: rgb(77, 77, 75)">K</SPan><SPan style="color: rgb(155, 99, 239)">A</SPan><SPan style="color: rgb(115, 248, 123)">R </SPan>  <!-- License information: https://untree.co/license/ -->
            </p>
            </div>
        </div>

    </footer>







    <script>

    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            var alert = document.getElementById('alert');
            alert.classList.remove('show');
        }, 1000); 
    });

    document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll('.submit-btn');


    const counterSpan = document.querySelector('.counter-span');


    function updateCounter(count) {
    counterSpan.textContent = count;
    localStorage.setItem('cartCounter', count);
    }


    if (localStorage.getItem('cartCounter')) {
    updateCounter(parseInt(localStorage.getItem('cartCounter')));
    }

    addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
        let count = parseInt(counterSpan.textContent);
        count++;
        updateCounter(count);
    });
    });



    const removeButtons = document.querySelectorAll('.remove-btn');
    removeButtons.forEach(button => {
    button.addEventListener('click', function() {
        let count = parseInt(counterSpan.textContent);
        if (count > 0) {
            count--;
            updateCounter(count);
        }
    });
    });
    });

                function changeImage(newSrc) {
            document.getElementById('mainImage').src = newSrc;
        }

            






    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
    






            
        


        