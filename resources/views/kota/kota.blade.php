@extends('layouts.app')

@section('content')
    <!-- Portfolio Grid Section -->
    <br><br><br><br>
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">
        <small>Wilayah {{$lokasi}} :</small>
      </h1>

      <div class="row">
        @foreach($data as $data)
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href=""><img class="card-img-top" src="/image/{{$data->image}}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="">{{$data->nama_sekolah}}</a>
              </h4>
              <p class="card-text"></p>
            </div>
            <hr>
            <div align="center">
              <a class="btn btn-primary btn-md" data-toggle="modal"
              data-target="#modal{{$data->id}}">Lihat Detil</a>
              <br><br>
            </div>
          </div>
        </div>
  
      <!-- /.row -->
      <br><br>
      <!-- Pagination -->
    </div>
    <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    <!-- Detil Sekolah Modal -->
    <div class="modal fade" id="modal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detil {{$data->nama_sekolah}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="/image/{{$data->image}}" class="foto_profile" alt="Foto Profil" width="100%" height="auto">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>Alamat :</b> {{ $data->alamat}}</li>
          <li class="list-group-item"><b>Deskripsi :</b> {{ $data->deskripsi}}</li>
          <li class="list-group-item"><b>Website :</b><a href="http://{{$data->website}}">{{ $data->website}}</a></li>
        </ul>
      </div>
      @endforeach
    </div>
  </div>
</div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed " style="display: block;">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


@endsection