<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ECO SMART</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}"  crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    
    <style>
      

    </style>
</head>
<body>
    <div class="fixed-header">
        <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="90" height="80" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('acceuil')}}" style="color: #000000;">ACCEUIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pack')}}"style="color: #000000;">PACKS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('produits')}}" style="color: #000000;">PRODUITS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="{{route('produits')}}" style="color: #000000;">INFORMATIONS</a>
                        </li>
                    </ul>
                    <a class=" nav-link  "  href="{{route('panier')}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg> </a>
                </div>
            </div>
        </nav>

        
    </div>
   
    
    <div >
      <div class="container" id="global">
        <div class="row justify-content-center ">

         @yield('content')
        </div>
      </div>

       
    </div>
    <footer   class="footer gradient-bg  text-dark py-4">

        <div class="row  footer-cen align-items-center-between">

            <div class="col-md-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo"width="130" height="100" class="img-fluid mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, felis in tempor aliquet.</p>
            </div>
            <div class="col-md-3">
                <h5>Quick Links</h5>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('acceuil')}}" style="color: #000000;">ACCEUIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pack')}}"style="color: #000000;">PACKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('produits')}}" style="color: #000000;">PRODUITS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('produits')}}" style="color: #000000;">INFORMATIONS</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3">
                <h5>Contact</h5>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li>
                        &#9742; +212661-144882
                    </li>
                    <li class="nav-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path fill="#FF0000" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 1.99 2H20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                         smartcaissebm@gmail.com
                    </li>
                    <li class="nav-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path fill="#FF0000" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                         OULAD HAMDAN BM
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>Follow Us</h5>
                <ul class="list-unstyled d-flex justify-content">
                    <li>
                        <a href="https://www.facebook.com/SMARTCaissebenimellal">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256"style="fill:#228BE6;">
                            <g fill="#0000FF" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,3c-12.15,0 -22,9.85 -22,22c0,11.03 8.125,20.137 18.712,21.728v-15.897h-5.443v-5.783h5.443v-3.848c0,-6.371 3.104,-9.168 8.399,-9.168c2.536,0 3.877,0.188 4.512,0.274v5.048h-3.612c-2.248,0 -3.033,2.131 -3.033,4.533v3.161h6.588l-0.894,5.783h-5.694v15.944c10.738,-1.457 19.022,-10.638 19.022,-21.775c0,-12.15 -9.85,-22 -22,-22z"></path></g></g>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/smart.caisse/">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"></stop><stop offset=".328" stop-color="#ff543f"></stop><stop offset=".348" stop-color="#fc5245"></stop><stop offset=".504" stop-color="#e64771"></stop><stop offset=".643" stop-color="#d53e91"></stop><stop offset=".761" stop-color="#cc39a4"></stop><stop offset=".841" stop-color="#c837ab"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"></stop><stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-4">

            </div>
            <div class="col-md-4 text-md-right">
                <p class="mb-0">Ⓒ 2024 <span style="color: #FFD700;">SMART</span><span style="color: #0000FF;"> CAISSE</span></p>
                <a href="#" style="color: #000000;">Privacy Policy</a> | <a href="#" style="color: #000000;">Terms of Use</a>
            </div>
        </div>

</footer>

    <script>
        // Ajoutez ces lignes dans votre fichier Blade pour gérer l'affichage/cachement de l'alerte
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                var alert = document.getElementById('alert');
                alert.classList.remove('show');
            }, 1000); // Cacher l'alerte après 5 secondes
        });
    </script>
    

    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>