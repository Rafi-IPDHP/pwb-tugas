@extends('template.welcome')

@section('title', 'Blank Page')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <h1 class="fw-bold fs-1">Login Library</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row mt-5">
        <div class="col-6 container d-flex justify-content-center">
            <div class="card" style="width: 25rem">
              <div class="card-body">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <p class="card-title fs-1 fw-semibold">Login</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <img src="{{ asset('assets/anggota.png') }}" alt="..." style="width: 120px" class="img-fluid mt-3">
                    </div>
                    <div class="col d-flex flex-column justify-content-center ms-4">
                        <p class="fs-2 fw-semibold" style="font-family: 'poppins">Anggota</p>
                        <button type="button" class="btn btn-primary text-center w-50 ms-4" data-bs-toggle="modal" data-bs-target="#loginAnggota">Login</button>
                        <!-- Modal -->
                        <div class="modal fade" id="loginAnggota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <img src="{{ asset('assets/online-library.png') }}" alt="..." style="width: 35px" class="me-2">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Library</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('auth.prosesAnggota') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row d-flex flex-column">
                                            <div class="col d-flex justify-content-center mb-2">
                                                <h1 class="fs-3 fw-bold">Login</h1>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_anggota" class="form-label">Nama Anggota</label>
                                                    <input type="text" name="nama_anggota" class="form-control" id="nama_anggota" placeholder="Masukkan Nama Anda">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="kode_anggota" class="form-label">Kode Anggota</label>
                                                    <input type="text" name="password" class="form-control" id="kode_anggota" placeholder="Masukkan Kode Anggota">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-6 container d-flex justify-content-center">
            <div class="card" style="width: 25rem">
              <div class="card-body">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <p class="card-title fs-1 fw-semibold">Login</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <img src="{{ asset('assets/librarian.png') }}" alt="..." width="120px" class="img-fluid mt-3">
                    </div>
                    <div class="col d-flex flex-column justify-content-center ms-4">
                        <p class="fs-2 fw-semibold" style="font-family: 'poppins">Petugas</p>
                        <button type="button" class="btn btn-primary text-center w-50 ms-4" data-bs-toggle="modal" data-bs-target="#loginPetugas">Login</button>
                        <!-- Modal -->
                        <div class="modal fade" id="loginPetugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <img src="{{ asset('assets/online-library.png') }}" alt="..." style="width: 35px" class="me-2">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Library</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('auth.prosesAnggota') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row d-flex flex-column">
                                            <div class="col d-flex justify-content-center mb-2">
                                                <h1 class="fs-3 fw-bold">Login</h1>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="nama_petugas" class="form-label">Nama Petugas</label>
                                                    <input type="text" name="nama_anggota" class="form-control" id="nama_petugas" placeholder="Masukkan Nama Anda">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="jabatan" class="form-label">Jabatan Petugas</label>
                                                    <input type="text" name="password" class="form-control" id="jabatan" placeholder="Masukkan Jabatan Anda">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection
