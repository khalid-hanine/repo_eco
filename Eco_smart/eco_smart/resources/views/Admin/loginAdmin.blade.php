<link rel="stylesheet" type="text/css" href="{{ asset('css/connecter.css') }}">


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>




{{-- //_______ --}}
<section class="vh-75 " id="section">
    <div class="mask d-flex align-items-center h-100 ">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card " style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class=" text-center mb-5">Log in</h2>
  
                <form action="{{route('adminInfo')}}" method="POst">
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
                        Log in
                  </button>
                  </div>
  
                 
  
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
