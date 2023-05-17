<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/login/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
     crossorigin="anonymous">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/login/login.css')}}">

    <title>Login Sekarang | Book.id</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg bg-image order-2 order-md-1 "></div>
    <div class="contents order-1 order-md-2">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            @if (session('status'))
              <div class="alert alert-danger">
                  {{session('message')}}
              </div>
            @endif
            
            <form action="#" method="post" class="card p-4">
            @csrf
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input class="form-control" type="text" name="username" id="username" placeholder="Masukkan Username Anda" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda" required>
              </div>
              <div>
                <button type="submit" class="btn btn-primary form-control">Login</button>
              </div>
              <div class="text-center pt-2">
                Don't Have Account? <a href="register">Register</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
  crossorigin="anonymous"></script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>