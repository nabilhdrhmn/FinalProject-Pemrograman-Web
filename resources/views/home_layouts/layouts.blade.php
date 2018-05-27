<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siap Sekolah</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('home/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{url('home/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{url('home/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <!--<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">-->

    <!-- Custom styles for this template -->
    <link href="{{url('home/css/freelancer.min.css')}}" rel="stylesheet">
    <!--<link href="css/freelancer.min.css" rel="stylesheet">-->
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase navbar-shrink" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{url('/')}}">Siap Sekolah</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/login-admin')}}">Admin Login</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/category')}}">Category</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <!-- Bootstrap core JavaScript -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

    <script src="{{url('/home/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/home/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <!--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>-->

    <script src="{{url('/home/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('/home/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <!--<script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>-->

    <script src="{{url('/home/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{url('/home/js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <!--<script src="js/freelancer.min.js"></script>-->
    <script src="{{url('/home/js/freelancer.min.js')}}"></script>    

  


</body></html>