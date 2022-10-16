<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.gradient-custom-3 {
background: #84fab0;

background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
background: #84fab0;

background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="{{route('registered-user')}}" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" value="{{old('name')}}" >
                  <span class="text-danger">@error('name') {{$message}} @enderror </span>
                  
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">VTU ID</label>
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="vtu" value="{{old('vtu')}}" >
                    <span class="text-danger">@error('vtu') {{$message}} @enderror </span>
                    
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label select-label">Degree</label>
    
                      <select class="select form-control-lg">
                        <option value="degree" disabled>Degree</option>
                        <option value="B.tech">B.tech</option>
                        <option value="M.tech">M.tech</option>
                        <option value="Phd">Phd</option>
                      </select>
    
                  </div>  

                  <div class="form-outline mb-4">
                    <label class="form-label select-label">Specialization</label>
                      <select class="select form-control-lg">
                        <option value="Specialization" disabled>Specialization</option>
                        <option value="None">None</option>
                        <option value="Ai">AI</option>
                        <option value="Cybersecurity">Cybersecurity</option>
                      </select>
    
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label select-label">Semester</label>
    
                      <select class="select form-control-lg">
                        <option value="0" disabled>Semester</option>
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                        <option value="4"> 4</option>
                        <option value="5"> 5</option>
                        <option value="6"> 6</option>
                        <option value="7"> 7</option>
                        <option value="8"> 8</option>
                      </select>
    
                  </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" value="{{old('email')}}" >
                  <span class="text-danger">@error('email') {{$message}} @enderror </span>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" value="{{old('password')}}" >
                  <span class="text-danger">@error('password') {{$message}} @enderror </span>
                </div> 

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <input type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>