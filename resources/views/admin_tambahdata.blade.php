@extends('admin_layouts.layouts')

@section('content')
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Tambah Data Sekolah</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Sekolah</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="password">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="password">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Wilayah</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="password">
          </div>
          <a class="btn btn-primary btn-block" href="index.html">Tambah Sekolah</a>
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
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
@endsection
