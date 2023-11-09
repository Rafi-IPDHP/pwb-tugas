@extends('template.welcome')

@section('title', 'Peminjaman')

@section('content')
<section class="content-wrapper">
    <h3 class="pt-3 d-flex align-items-center justify-content-center">Form Peminjaman</h3>
    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="post" class="py-3 container">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam" value="{{ $peminjaman->tanggal_pinjam }}">
        </div>
        <div class="mb-2">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali" value="{{ $peminjaman->tanggal_kembali }}">
        </div>
        <div class="mb-2">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <select name="id_buku" class="form-select" id="judul_buku" aria-label="id_buku">
                <option disabled selected>@forelse ($peminjaman->buku as $buku)
                    {{ $buku->judul_buku }}
                @empty
                    s
                @endforelse</option>
                @foreach ($bukus as $buku)
                <option value="{{ $buku->id }}">{{ $buku->judul_buku }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="nama_anggota" class="form-label">Nama Anggota</label>
            <select name="id_anggota" class="form-select" id="nama_anggota" aria-label="id_anggota">
                <option disabled selected>@forelse ($peminjaman->anggota as $anggota)
                    {{ $anggota->nama_anggota }}
                @empty
                    s
                @endforelse</option>
                @foreach ($anggotas as $anggota)
                <option value="{{ $anggota->id }}">{{ $anggota->nama_anggota }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="nama_petugas" class="form-label">Nama Petugas</label>
            <select name="id_petugas" class="form-select" id="nama_petugas" aria-label="id_petugas">
                <option disabled selected>@forelse ($peminjaman->petugas as $petugas)
                    {{ $petugas->nama_petugas }}
                @empty
                    s
                @endforelse</option>
                @foreach ($petugases as $petugases)
                <option value="{{ $petugases->id }}">{{ $petugases->nama_petugas }}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex align-items-end justify-content-end">
            <button type="submit" class="btn btn-primary mb-3">Kirim</button>
        </div>
    </form>
</section>
@endsection
