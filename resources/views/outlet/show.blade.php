@extends('master')

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Outlet</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/outlet" method="post">
                @csrf
                <div class="card-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                <input type="text" name="nama" value="{{$outlet->nama}}" class="form-control" disabled>
                  </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                <input type="text" name="alamat" value="{{$outlet->alamat}}" class="form-control" disabled>
                  </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Telepon</label>
                <input type="text" name="tlp" value="{{$outlet->tlp}}" class="form-control" disabled>
                  </div>
                  <div class="col-md-12 d-flex justify-content-end">
                    <a href="/outlet" class="btn btn-outline-info">
                      Kembali
                    </a>
                  </div>
              </form>
        </div>
    </div>
@endsection