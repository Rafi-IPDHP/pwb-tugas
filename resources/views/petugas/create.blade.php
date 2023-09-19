@extends('template.welcome')

@section('title', 'Petugas')

@section('content')
    <section class="content-wrapper">
        <h3 class="pt-3 d-flex align-items-center justify-content-center">Form Input Petugas</h3>
        <form action="{{ route('petugas.store') }}" method="post" class="py-3 container">
            @csrf
            <div class="mb-2">
                <label for="nama_petugas" class="form-label">Nama Petugas</label>
                <input type="text" name="nama_petugas" class="form-control" id="nama_petugas" placeholder="Aldo">
            </div>
            <div class="mb-2">
                <label for="jabatan_petugas" class="form-label">Jabatan Petugas</label>
                <input type="text" name="jabatan_petugas" class="form-control" id="jabatan_petugas" placeholder="CTO">
            </div>
            <div class="mb-2">
                <label for="no_telp_petugas" class="form-label">No Telephone</label>
                <input type="text" name="no_telp_petugas" class="form-control" id="no_telp_petugas" placeholder="08____">
            </div>
            <div class="mb-4">
                <label for="alamat_petugas" class="form-label">Alamat Petugas</label>
                <input type="text" name="alamat_petugas" class="form-control" id="alamat_petugas" placeholder="Dimana kek">
            </div>
            <div class="row justify-content-between mb-3">
                <div class="col">
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{ route('petugas.index') }}" class="btn btn-warning me-2">Back</a>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </form>
    </section>
@endsection
