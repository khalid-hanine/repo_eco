<link rel="stylesheet" type="text/css" href="{{ asset('css/connecter.css') }}">

@extends('layouts.app')

@section('content')




<section class="vh-75 " id="section">
    <div class="mask d-flex align-items-center h-100 ">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class=" text-center mb-4">Sign up</h2>
  
                <form action="{{route('StoreInscrire')}}" method="POst">
                  @csrf
  
                  <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example1cg">Your Name</label>
  
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="nom" required/>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">tele</label>
  
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="tele" required/>
                  </div>
  
                  
  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
  
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" required/>
                  </div>
  
                  
  
                  
  
                  <div class="d-flex justify-content-center">
                    <button  type="submit " class="btn  btn-block btn-lg gradient-custom-4 text-body btn-submit" id="btn">
                      Valider la commande
                  </button>
                  </div>
  
                  <p class="text-center text-muted mt-1 mb-0"> 
                      <a href="{{route('connecter')}}" class="fw-bold text-body">Log in</a></p>
  
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
                     const addToCartButtons = document.querySelectorAll('.btn-submit');
 
 
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
                             count=0;
                             updateCounter(count);
                         });
                     });
                   })
 </script>


@endsection