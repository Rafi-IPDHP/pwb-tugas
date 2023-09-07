@extends('template.welcome')

@section('title', 'Petugas')

@section('content')
    <section class="content-wrapper">
        <h3 class="pt-3 d-flex align-items-center justify-content-center">Form Input Petugas</h3>
        <form action="" method="post" class="py-3 container">
            <div class="mb-2">
                <label for="nama_petugas" class="form-label">Nama Petugas</label>
                <input type="text" class="form-control" id="nama_petugas" placeholder="Aldo">
            </div>
            <div class="mb-2">
                <label for="jabatan_petugas" class="form-label">Jabatan Petugas</label>
                <input type="text" class="form-control" id="jabatan_petugas" placeholder="RPL">
            </div>
            <div class="mb-2">
                <label for="no_telp_petugas" class="form-label">No Telephone</label>
                <input type="text" class="form-control" id="no_telp_petugas" placeholder="08____">
            </div>
            <div class="mb-4">
                <label for="alamat_petugas" class="form-label">Alamat Petugas</label>
                <input type="text" class="form-control" id="alamat_petugas" placeholder="Dimana kek">
            </div>
            <div class="d-flex align-items-end justify-content-end">
                <button type="submit" class="btn btn-primary mb-3">Kirim</button>
            </div>
        </form>
    </section>
@endsection
