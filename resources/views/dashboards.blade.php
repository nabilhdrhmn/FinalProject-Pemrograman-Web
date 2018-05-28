@extends('layouts.admin')

{{-- @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
{{-- <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
 --}}      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table fa-fw"></i>List Sekolah {{-- <button class="btn btn-sm btn-secondary" type="submit" style="float: right;">Logout</button> --}}</div>
              
{{--             </form>
 --}}<div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Sekolah</th>
                  <th>Lokasi</th>
                  <th>Alamat</th>
                  <th>Wilayah</th>
                  <th>Deskripsi</th>
                  <th>Foto</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama Sekolah</th>
                  <th>Lokasi</th>
                  <th>Alamat</th>
                  <th>Keunggulan</th>
                  <th>Fasilitas</th>
                  <th>Foto</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                      <button class="btn btn-primary btn-sm" style="color: white;" data-toggle="modal" data-target="#editModal">Edit</button>
                      <form action="{{url('delete')}}" method=""></form>
                      <button class="btn btn-danger btn-sm" style="color: white;" type="submit">Hapus</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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

    <!-- Detil Sekolah Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
@endsection