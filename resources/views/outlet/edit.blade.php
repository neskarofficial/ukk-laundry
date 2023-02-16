@extends('master')

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Outlet</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route ('outlet.update', [$outlet->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                <input type="text" name="nama" value="{{$outlet->nama}}" class="form-control" placeholder="Enter Nama Anda">
                  </div>
                  <div class="form-group">
                  <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                <input type="text" name="alamat" value="{{$outlet->alamat}}"class="form-control" placeholder="Enter Alamat Anda">
                  </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">No Telepon</label>
                <input type="text" name="tlp" value="{{$outlet->tlp}}" class="form-control" placeholder="Enter Telepon Anda">
                  </div>
                  <div class="col-md-6 d-flex justify-content-start">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </form>
        </div>
    </div>
@endsection