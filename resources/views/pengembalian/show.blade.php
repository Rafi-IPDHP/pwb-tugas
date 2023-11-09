@extends('template.welcome')

@section('title', 'Pengembalian')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Pengembalian</h2>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">Tanggal pengembalian</th>
                <th scope="col">Denda</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Nama Anggota</th>
                <th scope="col">Nama Petugas</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>{{ $pengembalian->tanggal_pengembalian }}</td>
                <td>{{ $pengembalian->denda }}</td>
                <td>@forelse ($pengembalian->buku as $buku)
                    {{ $buku->judul_buku }}
                @empty
                    s
                @endforelse</td>
                <td>@forelse ($pengembalian->anggota as $anggota)
                    {{ $anggota->nama_anggota }}
                @empty
                    s
                @endforelse</td>
                <td>@forelse ($pengembalian->petugas as $petugas)
                    {{ $petugas->nama_petugas }}
                @empty
                    s
                @endforelse</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="{{ route('pengembalian.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
