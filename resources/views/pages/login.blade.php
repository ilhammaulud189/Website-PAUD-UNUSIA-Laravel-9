@extends('layout.loginpage')


      
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4">
    <main class="form-signin">
      <div class="text-center">
        <img class="mb-4" src={{url("loginpaud/assets/brand/logosmall.png")}} alt="" width="25%">
          <h1 class="h3 mb-3 fw-semibold ">Welcome</h1></div>
      <form>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid
              
          @enderror" id="email" placeholder="name@example.com" required>
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control @error('password') is-invalid
              
          @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
    
        <!--<div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>-->
        <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Login</button>
        
      </form>
    </main> 
    </div>
  </div>
  </div>
@endsection