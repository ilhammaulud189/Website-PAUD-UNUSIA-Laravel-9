<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('tittle')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

@include('includess.style')

  
</head>

<body>
       <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <!-- area logo -->
         <img src={{url("fronendpaud/assets/img/logo1.png")}} alt=""> 
        <!--<h1>PG PAUD UNUSIA<span>.</span></h1> -->
      </a>
    </div>
  </header><!-- End Header -->
  

  @yield('content')



  @include('includess.script')

  </body>

</html>