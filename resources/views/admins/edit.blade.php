@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">

    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Edit Data Sekolah</div>
      <div class="card-body">
        <form method="POST" action="/updatedata/{{ $data->id }}"> {{ csrf_field()}}
          <div class="form-group">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input class="form-control" id="nama_sekolah" name="nama_sekolah" type="text"  placeholder="password" value="{{ $data->nama_sekolah }}">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input class="form-control" name="alamat" id="alamat" type="text" aria-describedby="emailHelp" placeholder="password" value="{{$data->alamat }}">
          </div>
          <div class="form-group">
            <label for="wilayah">Wilayah</label>
            <input class="form-control" id="wilayah" name="wilayah" type="text" aria-describedby="emailHelp" placeholder="password" value="{{$data->wilayah }}">
          </div>
          <div class="form-group">
            <label for="website">Website</label>
            <input class="form-control" id="website" name="website" type="text" aria-describedby="emailHelp" placeholder="password" value="{{$data->website }}">
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" rows="5" id="deskripsi" placeholder="deskripsi" type="text" name="deskripsi">{{ $data->deskripsi }}
            </textarea>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Update</button>
        </form>
      </div>
    </div>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">   
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}

            <button class="btn btn-warning" type="submit">Logout</button>
            {{-- <a class="btn btn-primary" href="login.html">Logout</a> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection