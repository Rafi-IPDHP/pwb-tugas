@extends('template.welcome')

@section('title', 'rak')

@section('content')
<section class="content-wrapper">
    <h3 class="pt-3 d-flex align-items-center justify-content-center">Form Tambah Rak</h3>
    <form action="{{ route('rak.store') }}" method="post" class="py-3 container">
        @csrf
        <div class="mb-2">
            <label for="nama_rak" class="form-label">Nama Rak</label>
            <input type="text" name="nama_rak" class="form-control" id="nama_rak">
        </div>
        <div class="mb-2">
            <label for="lokasi_rak" class="form-label">Lokasi Rak</label>
            <input type="text" name="lokasi_rak" class="form-control" id="lokasi_rak">
        </div>
        <div class="mb-4">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <select name="id_buku" class="form-select" id="judul_buku" aria-label="id_buku">
                <option disabled selected>Open this select menu</option>
                @foreach ($bukus as $buku)
                <option value="{{ $buku->id }}">{{ $buku->judul_buku }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-primary">Tambah Rak</button>
        </div>
    </form>
</section>
@endsection
