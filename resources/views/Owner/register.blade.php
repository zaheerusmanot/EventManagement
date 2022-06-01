<!doctype html>
<html lang="en">
  <head>
    <title>Register as Hall Owner</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign Up as Hall Owner</p>
                      <form class="mx-1 mx-md-4" action="{{route('OwnerRegister.post')}}" method="POST">
                        @csrf
                        @if(session()->has('Ops!'))   
                         <div class="alert alert-danger">    
                           {{ session()->get('Ops!') }}   
                         </div>                   
                        @endif
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="fullName" id="form3Example3c" name="fullName" class="form-control" value="{{old('fullName')}}"/>
                              <label class="form-label" for="form3Example3c">Enter Full Name</label>
                              @if ($errors->has('fullName'))
                              <span class="text-danger">{{ $errors->first('fullName') }}</span>
                          @endif
                            </div>
                          </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" name="email" class="form-control" value="{{old('email')}}"/>
                            <label class="form-label" for="form3Example3c">Enter Email Address</label>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="text" id="form3Example3c" name="contact_no" class="form-control" value="{{old('contact_no')}}"/>
                              <label class="form-label" for="form3Example3c">Contact No</label>
                              @if ($errors->has('contact_no'))
                              <span class="text-danger">{{ $errors->first('contact_no') }}</span>
                          @endif
                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="date" id="form3Example3c" name="dob" class="form-control" value="{{old('dob')}}"/>
                              <label class="form-label" for="form3Example3c">Date of Birth</label>
                              @if ($errors->has('dob'))
                              <span class="text-danger">{{ $errors->first('dob') }}</span>
                          @endif
                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <label class="form-label" id="form3Example3c" for="form3Example3c">Gender</label>
                              <input class="" type="radio"  name="gender" value= M>Male
                              <input class="" type="radio"  name="gender" value= F>FeMale
                              <input class="" type="radio"  name="gender" value= O>Other
                              @if ($errors->has('gender'))
                              <span class="text-danger">{{ $errors->first('dob') }}</span>
                          @endif
                            </div>
                          </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" name="password" id="form3Example4c" class="form-control" />
                            <label class="form-label" for="form3Example4c">Password</label>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <input type="password" name="confirm_password" id="form3Example4c" class="form-control" />
                              <label class="form-label" for="form3Example4c">Confirm Password</label>
                              @if ($errors->has('confirm_password'))
                              <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                          @endif
                            </div>
                          </div>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>
                        <a href="{{route('ownerLogin')}}" class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">Already have an account? Sign In</a>
                      </form>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>