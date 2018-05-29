@extends('layouts.app')

@section('content')
    <br><br><br>
    <div class="page-header">
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Lokasi Sekolah :</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="{{url('/wilayah/1')}}">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              </div>
              <a href="{{url('/wilayah/1')}}">
              <img class="img-fluid" src="{{url('/home/img/jakarta.jpg')}}" alt=""></a>
              <h3 style="text-align: center;">Jakarta</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="{{url('/wilayah/2')}}">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                </div>
              </div>
              <a href="{{url('/wilayah/2')}}">
              <img class="img-fluid" src="{{url('/home/img/bandung.jpg')}}" alt=""></a>
              <h3 style="text-align: center;">Bandung</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="{{url('/wilayah/2')}}">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">

                </div>
              </div>
              <a href="{{url('/wilayah/3')}}">
              <img class="img-fluid" src="{{url('/home/img/surabaya.jpg')}}" alt=""></a>
              <h3 style="text-align: center;">Surabaya</h3>
              </a>
          </div>
        </div>
      </div>
    </section>
    </div>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Final Project Pemrograman Web</small>
      </div>
    </div><div class="container">
</div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed " style="display: block;">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
@endsection