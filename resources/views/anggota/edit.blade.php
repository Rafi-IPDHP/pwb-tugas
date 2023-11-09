@extends('template.welcome')

@section('title', 'Anggota')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center">Data Anggota</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
                <div class="card-body">
                    <form action="{{ route('anggota.update', $anggotas[0]->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="kode_anggota" class="form-label">Kode Anggota</label>
                            <input type="number" name="kode_anggota" class="form-control" id="kode_anggota" value="{{ $anggotas[0]->kode_anggota }}">
                        </div>
                        <div class="mb-2">
                            <label for="nama_anggota" class="form-label">Nama Anggota</label>
                            <input type="text" name="nama_anggota" class="form-control" id="nama_anggota" value="{{ $anggotas[0]->nama_anggota }}">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="jk_anggota" class="form-control" id="jk_anggota" value="{{ $anggotas[0]->jk_anggota }}" hidden>
                        </div>
                        {{-- <div class="mb-2">
                            <label for="jk_anggota" class="form-label">Jenis Kelamin Anggota</label>
                            <select name="jk_anggota" class="form-select" aria-label="Default select example" id="jk_anggota">
                                <option selected disabled>Open this select menu</option>
                                <option value="L">Laki Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div> --}}
                        <div class="mb-2">
                            <label for="jurusan_anggota" class="form-label">Jurusan Anggota</label>
                            <input type="text" name="jurusan_anggota" class="form-control" id="jurusan_anggota" value="{{ $anggotas[0]->jurusan_anggota }}">
                        </div>
                        <div class="mb-2">
                            <label for="no_telp_anggota" class="form-label">No Telephone</label>
                            <input type="text" name="no_telp_anggota" class="form-control" id="no_telp_anggota" value="{{ $anggotas[0]->no_telp_anggota }}">
                        </div>
                        <div class="mb-4">
                            <label for="alamat_anggota" class="form-label">Alamat Anggota</label>
                            <input type="text" name="alamat_anggota" class="form-control" id="alamat_anggota" value="{{ $anggotas[0]->alamat_anggota }}">
                        </div>
                        <div class="d-flex align-items-end justify-content-end mb-3">
                            <a href="{{ route('anggota.index') }}" class="btn btn-danger me-2">Back</a>
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
