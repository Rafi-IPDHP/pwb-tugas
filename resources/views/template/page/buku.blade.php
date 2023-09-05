@extends('template.welcome')

@section('title', 'Buku')

@section('content')
    <section class="content-wrapper">
        <h3 class="pt-3 d-flex align-items-center justify-content-center">Form Input Buku</h3>
        <form action="" method="post" class="py-3 container">
            <div class="mb-2">
                <label for="kode_buku" class="form-label">Kode Buku</label>
                <input type="number" class="form-control" id="kode_buku" placeholder="0123">
            </div>
            <div class="mb-2">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" placeholder="Nyerah Aja">
            </div>
            <div class="mb-2">
                <label for="penulis" class="form-label">Penulis Buku</label>
                <input type="text" class="form-control" id="penulis" placeholder="Aldo">
            </div>
            <div class="mb-2">
                <label for="penerbit" class="form-label">Penerbit Buku</label>
                <input type="text" class="form-control" id="penerbit" placeholder="Aldo Ahmad">
            </div>
            <div class="mb-2">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="number" class="form-control" id="tahun_terbit" placeholder="1999">
            </div>
            <div class="mb-4">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" placeholder="12">
            </div>
            <div class="d-flex align-items-end justify-content-end">
                <button type="submit" class="btn btn-primary mb-3">Kirim</button>
            </div>
        </form>
    </section>
@endsection
