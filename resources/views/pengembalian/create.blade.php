@extends('template.welcome')
@section('title', 'Pengembalian')
@section('content')
<section class="content-wrapper">
    <h3 class="pt-3 d-flex align-items-center justify-content-center">Form Pengembalian</h3>
    <form action="{{ route('pengembalian.store') }}" method="post" class="py-3 container">
        @csrf
        <div class="mb-2">
            <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
            <input type="date" name="tanggal_pengembalian" class="form-control" id="tanggal_pengembalian">
        </div>
        <div class="mb-2">
            <label for="denda" class="form-label">Denda</label>
            <input type="date" name="denda" class="form-control" id="denda">
        </div>
        <div class="mb-2">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <select name="id_buku" class="form-select" id="judul_buku" aria-label="id_buku">
                <option disabled selected>Open this select menu</option>
                @foreach ($bukus as $buku)
                <option value="{{ $buku->id }}">{{ $buku->judul_buku }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="nama_anggota" class="form-label">Nama Anggota</label>
            <select name="id_anggota" class="form-select" id="nama_anggota" aria-label="id_anggota">
                <option disabled selected>Open this select menu</option>
                @foreach ($anggotas as $anggota)
                <option value="{{ $anggota->id }}">{{ $anggota->nama_anggota }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="nama_petugas" class="form-label">Nama Petugas</label>
            <select name="id_petugas" class="form-select" id="nama_petugas" aria-label="id_petugas">
                <option disabled selected>Open this select menu</option>
                @foreach ($petugas as $petugas)
                <option value="{{ $petugas->id }}">{{ $petugas->nama_petugas }}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex align-items-end justify-content-end">
            <button type="submit" class="btn btn-primary mb-3">Kirim</button>
        </div>
    </form>
</section>
@endsection
