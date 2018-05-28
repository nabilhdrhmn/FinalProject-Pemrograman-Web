@extends('layouts.app')

@section('content')
    <!-- Portfolio Grid Section -->
    <br><br><br><br>
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">
        @foreach($data as $skul)
        <small>Wilayah {{$skul->wilayah}} :</small>
        @endforeach
      </h1>
      @php unset($skul); @endphp

      <div class="row">
        @foreach($data as $data)
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href=""><img class="card-img-top" src="{{--  {{url({{$sekolah->image}})}} --}}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="">{{$data->nama_sekolah}}</a>
              </h4>
              <p class="card-text"></p>
            </div>
            <hr>
            <div align="center">
              <a class="btn btn-primary btn-md" href="">Lihat Detil</a>
              <br><br>
            </div>
          </div>
        </div>
        @endforeach
      <!-- /.row -->
      <br><br>
      <!-- Pagination -->
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

    </div>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Final Project Pemrograman Web</small>
      </div>
    </div>

    <!-- Detil Sekolah Modal -->
    <div class="modal fade" id="detilsekolah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="/action_page.php">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> 
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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