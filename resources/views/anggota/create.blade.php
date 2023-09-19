@extends('template.welcome')

@section('title', 'Anggota')

@section('content')
    <section class="content-wrapper">
        <h3 class="pt-3 d-flex align-items-center justify-content-center">Form Input Anggota</h3>
        <form action="{{ route('anggota.store') }}" method="post" class="py-3 container">
            @csrf
            <div class="mb-2">
                <label for="kode_anggota" class="form-label">Kode Anggota</label>
                <input type="number" name="kode_anggota" class="form-control" id="kode_anggota" placeholder="0123">
            </div>
            <div class="mb-2">
                <label for="nama_anggota" class="form-label">Nama Anggota</label>
                <input type="text" name="nama_anggota" class="form-control" id="nama_anggota" placeholder="Aldo">
            </div>
            <div class="mb-2">
                <label for="jk_anggota" class="form-label">Jenis Kelamin Anggota</label>
                <select name="jk_anggota" class="form-select" aria-label="Default select example" id="jk_anggota">
                    <option selected disabled>Open this select menu</option>
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="jurusan_anggota" class="form-label">Jurusan Anggota</label>
                <input type="text" name="jurusan_anggota" class="form-control" id="jurusan_anggota" placeholder="TI">
            </div>
            <div class="mb-2">
                <label for="no_telp_anggota" class="form-label">No Telephone</label>
                <input type="text" name="no_telp_anggota" class="form-control" id="no_telp_anggota" placeholder="08____">
            </div>
            <div class="mb-4">
                <label for="alamat_anggota" class="form-label">Alamat Anggota</label>
                <input type="text" name="alamat_anggota" class="form-control" id="alamat_anggota" placeholder="Dimana kek">
            </div>
            <div class="row justify-content-between mb-3">
                <div class="col">
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{ route('anggota.index') }}" class="btn btn-warning me-2">Back</a>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </form>
    </section>
@endsection
