@extends('template.welcome')

@section('title', 'Petugas')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center">Data Petugas</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                    <form action="{{ route('petugas.update', $petugas[0]->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="nama_petugas" class="form-label">Nama Petugas</label>
                            <input type="text" name="nama_petugas" class="form-control" id="nama_petugas" value="{{ $petugas[0]->nama_petugas }}">
                        </div>
                        <div class="mb-2">
                            <label for="jabatan_petugas" class="form-label">Jabatan Petugas</label>
                            <input type="text" name="jabatan_petugas" class="form-control" id="jabatan_petugas" value="{{ $petugas[0]->jabatan_petugas }}">
                        </div>
                        <div class="mb-2">
                            <label for="no_telp_petugas" class="form-label">No Telephone</label>
                            <input type="text" name="no_telp_petugas" class="form-control" id="no_telp_petugas" value="{{ $petugas[0]->no_telp_petugas }}">
                        </div>
                        <div class="mb-4">
                            <label for="alamat_petugas" class="form-label">Alamat Petugas</label>
                            <input type="text" name="alamat_petugas" class="form-control" id="alamat_petugas" value="{{ $petugas[0]->alamat_petugas }}">
                        </div>
                        <div class="d-flex align-items-end justify-content-end mb-3">
                            <a href="{{ route('petugas.index') }}" class="btn btn-danger me-2">Back</a>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
