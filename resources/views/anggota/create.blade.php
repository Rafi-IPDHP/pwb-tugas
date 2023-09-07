@extends('template.welcome')

@section('title', 'Anggota')

@section('content')
    <section class="content-wrapper">
        <h3 class="pt-3 d-flex align-items-center justify-content-center">Form Input Anggota</h3>
        <form action="" method="post" class="py-3 container">
            <div class="mb-2">
                <label for="kode_anggota" class="form-label">Kode Anggota</label>
                <input type="number" class="form-control" id="kode_anggota" placeholder="0123">
            </div>
            <div class="mb-2">
                <label for="nama_anggota" class="form-label">Nama Anggota</label>
                <input type="text" class="form-control" id="nama_anggota" placeholder="Aldo">
            </div>
            <div class="mb-2">
                <label for="jk_anggota" class="form-label">Jenis Kelamin Anggota</label>
                <select class="form-select" aria-label="Default select example" id="jk_anggota">
                    <option selected disabled>Open this select menu</option>
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="jurusan_anggota" class="form-label">Jurusan Anggota</label>
                <input type="text" class="form-control" id="jurusan_anggota" placeholder="RPL">
            </div>
            <div class="mb-2">
                <label for="no_telp_anggota" class="form-label">No Telephone</label>
                <input type="text" class="form-control" id="no_telp_anggota" placeholder="08____">
            </div>
            <div class="mb-4">
                <label for="alamat_anggota" class="form-label">Alamat Anggota</label>
                <input type="text" class="form-control" id="alamat_anggota" placeholder="Dimana kek">
            </div>
            <div class="d-flex align-items-end justify-content-end">
                <button type="submit" class="btn btn-primary mb-3">Kirim</button>
            </div>
        </form>
    </section>
@endsection
