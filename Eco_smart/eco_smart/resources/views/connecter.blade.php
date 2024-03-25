<link rel="stylesheet" type="text/css" href="{{ asset('css/connecter.css') }}">


@extends('layouts.app')

@section('content')



    {{-- _____ --}}
    <section class="vh-75 " id="section">
  <div class="mask d-flex align-items-center h-100 ">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card " style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class=" text-center mb-5">Log in</h2>

              <form action="{{route('loginUser')}}" method="POst">
                @csrf

                <div class="form-outline mb-5">
                  <label class="form-label mt-2" for="form3Example1cg">Your Name</label>

                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" required/>
                </div>

                

                <div class="form-outline mb-5">
                  <label class="form-label mt-1" for="form3Example4cg">Password</label>

                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password"/>
                </div>

                

                

                <div class="d-flex justify-content-center mt-3">
                  <button  type="submit " class="btn  btn-block btn-lg gradient-custom-4 text-body" id="btn">
                    Valider la commande
                </button>
                </div>

                <p class="text-center text-muted mt-2 mb-0"> 
                    <a href="{{route('inscrire')}}" class="fw-bold text-body">Sign up</a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection