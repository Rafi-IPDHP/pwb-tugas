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
                                                    <label for="username" class="form-label">Username Anggota</label>
                                                    <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username Anda">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Anggota">
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
                                <form action="{{ route('auth.prosesPetugas') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row d-flex flex-column">
                                            <div class="col d-flex justify-content-center mb-2">
                                                <h1 class="fs-3 fw-bold">Login</h1>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username Petugas</label>
                                                    <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username Anda">
                                                    @error('username')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
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

{{-- @extends('template.welcome')

@section('title', 'Blank Page')

@section('content')
<div class="content-wrapper" style="background-size: cover; background-image: url('{{ asset("assets/library3.jpg") }}');">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <h1 class="fw-bold fs-1 text-white" hidden>Library</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container d-flex align-items-center h-100 mt-5 ps-4">
            <div class="row d-flex flex-column">
                <div class="col-auto col-md-auto col-sm-auto" style="font-family: 'poppins';">
                    <p class="fs-5 text-white fw-semibold mb-0" style="text-shadow: 2px 2px 4px #000000;">Welcome to</p>
                    <p class="text-white fw-bold mt-0" style="font-size: 80px; line-height: 80px; text-shadow: 2px 2px 4px #000000;">Online <img src="{{ asset('assets/online-library2.png') }}" alt="..." style="width: 70px;" class="mb-3 ms-2"></p>
                    <p class="fw-bold mt-0" style="font-size: 80px; line-height: 30px; margin-left: 90px; text-shadow: 2px 2px 4px #000000; color: #ffffff;">Library</p>
                    <p class="fs-5 text-white fw-semibold mt-4 mb-0 text-shadow: 2px 2px 4px #000000;">Knowledge at Your</p>
                    <p class="fs-5 text-white fw-semibold mt-0" style="line-height: 10px; margin-left: 130px; text-shadow: 2px 2px 4px #000000;">Fingertips</p>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
@endsection --}}
