<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.gradient-custom {
background: #6a11cb;

background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
                    <form action="{{route('login-user')}}" method="post">
                        @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                        @csrf
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typeEmailX">Email</label>
                      <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                      <span class="text-danger">@error('email') {{$message}} @enderror </span>
                    </div>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typePasswordX">Password</label>
                      <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                      <span class="text-danger">@error('password') {{$message}} @enderror </span>
                    </div>
      
                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
      
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
      
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
                    </form>
      
                  </div>
      
                  <div>
                    <p class="mb-0">Don't have an account? <a href="registration" class="text-white-50 fw-bold">Register</a>
                    </p>
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      </body>
      </html>