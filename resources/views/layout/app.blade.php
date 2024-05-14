<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('tittle')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('includess.style')

  
  <!-- chatbox-->
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="e91e78e1-92f2-4ede-97c8-4f4f54739dcf";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

  
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
      <nav id="navbar" class="navbar">
        <ul>            
          <li><a href="/">Beranda</a></li>
          <li><a href="/#about">Tentang</a></li>
          <li><a href="/#contact">Kontak</a></li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              </li>
              <li><a href="/artikel">Artikel</a></li>
              <li><a href="/detaillecturer">Staff & Pengajar</a></li>
              <!--<li><a href="/galery">galeri</a></li>-->
              <li><a href="https://journal.unusia.ac.id/index.php/TunasAswaja/issue/archive">Jurnal</a></li>
             
            </ul>
          </li>
        </ul>

      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  @yield('content')

  @include('includess.footer')

      <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 

      <div id="preloader"></div>

  @include('includess.script')

  </body>

</html>