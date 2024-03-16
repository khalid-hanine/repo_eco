<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="mt-5 border " >
        <div class="container-fluid ">
            <div class="row ">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark rounded sidebar">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="{{route('admin')}}">
                                    Produits
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{route('listeCommande')}}">
                                    Commandes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{route('listeUser')}}">
                                    Utilisateurs
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 col-lg-10 px-md-4">
                    <!-- Contenu du tableau de bord -->
       @yield('ContentAdmin')

                </main>
            </div>
        </div>
        
        


    </div>
    









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>