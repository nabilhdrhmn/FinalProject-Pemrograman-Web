@extends('layouts.app')    

@section('content')

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <br>
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <br>
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
          <br>
          <div class="card">
            <img src="/#" alt="Falah" style="width:100%">
            <h1>Falah Ath Thaariq Razzaq</h1>
            <p class="title">Front-end</p>
            <p>NRP: 5116100151</p>
            <div style="margin: 24px 0;">
              <a href="#"><i class="fa fa-dribbble"></i></a> 
              <a href="#"><i class="fa fa-twitter"></i></a>  
              <a href="#"><i class="fa fa-linkedin"></i></a>  
              <a href="#"><i class="fa fa-facebook"></i></a> 
            </div>
             <div class="card">
            <img src="/#" alt="Nabil" style="width:100%">
            <h1>Nabil H</h1>
            <p class="title">Back-end</p>
            <p>NRP: 5116100 </p>
            <div style="margin: 24px 0;">
              <a href="#"><i class="fa fa-dribbble"></i></a> 
              <a href="#"><i class="fa fa-twitter"></i></a>  
              <a href="#"><i class="fa fa-linkedin"></i></a>  
              <a href="#"><i class="fa fa-facebook"></i></a> 
            </div>
             <div class="card">
            <img src="/#" alt="Glenn" style="width:100%">
            <h1>Glenn</h1>
            <p class="title">Back-end</p>
            <p>NRP: 5115100</p>
            <div style="margin: 24px 0;">
              <a href="#"><i class="fa fa-dribbble"></i></a> 
              <a href="#"><i class="fa fa-twitter"></i></a>  
              <a href="#"><i class="fa fa-linkedin"></i></a>  
              <a href="#"><i class="fa fa-facebook"></i></a> 
            </div>
@endsection