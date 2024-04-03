<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECO SMART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
   <div class="me">
        <nav class="navbar navbar-expand-sm navbar-light fixed-top">

            <div class="container-fluid ">
                <a href="#" class="navbar-brand ">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="90" height="80" style="margin-top: -13px;" class="d-inline-block fixed-top ms-5 ">
                </a>
                <button class="navbar-toggler" style="margin-top: -5px;" type="button" onclick="toggleMenu()" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
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

       
      
       

         @yield('content')
        
     


    </div>
        </div>
    </div>










<footer class="footer-section" style=" margin-top: 600px;" id="foter">
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
                <p class="mb-1 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved by  <span style="color: #FFD700;">SMART</span><span style="color: #31c3f4;"> CAISSE</span> &mdash; Designed by <SPan style="color: rgb(77, 77, 75)">Khalid</SPan><SPan style="color: rgb(155, 99, 239)">Achraf</SPan><SPan style="color: rgb(115, 248, 123)">Rida </SPan>  <!-- License information: https://untree.co/license/ -->
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






    </script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>