<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Moderna Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> 
  <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <!-- <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet"> -->
  
  <!-- Template Main CSS File -->
  <link href="css/app.css" rel="stylesheet">
  
  <!-- =======================================================
  * Template Name: Moderna - v2.1.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>
  
  <body>

      <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Askaide V0.1</span></a></h1>

      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          
          <li><a style = "background-color : #fb5607 ; border-radius:5px" href="services.html">Poster un annonce</a></li>
          <li><a href="/admin">Login/s'enregistrer</a></li>
        </ul>
      </nav>

    </div>
  </header>
  
  <!-- End Header -->

  @include('Section.Header.header'),
  @include('Section.Footer.footer')
    @yield('content')
  
  <main id="main">





  <!-- Template Main JS File -->
  <script src="{{asset('js/app.js')}}"></script>

 <!-- Google Maps scripts--> 
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXNXl-K-Ejb4M_z-zAhGSOq_GxVNHx-GQ&callback=initAutocomplete&libraries=places&v=weekly"
      defer></script>




</body>

</html>