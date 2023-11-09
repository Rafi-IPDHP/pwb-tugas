@extends('template.welcome')

@section('title', 'Peminjaman')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Peminjaman</h2>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Nama Petugas</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>{{ $peminjaman->tanggal_pinjam }}</td>
                <td>{{ $peminjaman->tanggal_kembali }}</td>
                <td>@forelse ($peminjaman->buku as $buku)
                    {{ $buku->judul_buku }}
                @empty
                    s
                @endforelse</td>
                <td>@forelse ($peminjaman->anggota as $anggota)
                    {{ $anggota->nama_anggota }}
                @empty
                    s
                @endforelse</td>
                <td>@forelse ($peminjaman->petugas as $petugas)
                    {{ $petugas->nama_petugas }}
                @empty
                    s
                @endforelse</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
