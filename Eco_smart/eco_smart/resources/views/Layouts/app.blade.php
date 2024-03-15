<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ECO SMART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}"  crossorigin="anonymous"></script>


    <style>
        /* Your custom styles here */
        nav {
            text-align: center;
            height: 50px;
        }

        /* Style for navigation links */
        nav a {
            color: rgb(0, 0, 0);
            text-decoration: none;
            margin: 0 50px; /* Adjust the margin to create space between elements */
        }

        .navbar ul {
            padding: 0px;
            margin-inline-start: 30%;
        }
        .containner{
            margin-top: 80px;
        }
        
        /*________*/


        .alert-container {
            width: 20%;
            margin-top: 20px;

            position: fixed;
            top: 40px;
            right: 20px;
            z-index: 1000;
            transition: opacity 0.5s ease-in-out;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;

            border: 1px solid #2ecc71; /* Couleur verte */
            background-color: #27ae60; /* Couleur de fond verte */
            color: #fff; /* Couleur du texte blanc */
            border-radius: 15px 15px;
            opacity: 0; /* Par défaut, l'alerte est transparente */
        }

        .alert.show {
            opacity: 1; /* Lorsque la classe 'show' est ajoutée, l'alerte devient visible */
        }


    </style>
</head>
<body 














>
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
                            <a class="nav-link" href="{{route('produits')}}" style="color: #000000;">ACCEUIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('produits')}}"style="color: #000000;">PACKS</a>
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
   
    
    <div style="margin-top:5%">
      <div class="container">
        <div class="row justify-content-center ">

         @yield('content')
        </div>
      </div>

       
    </div>

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