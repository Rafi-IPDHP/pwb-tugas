@extends('template.welcome')

@section('title', 'buku')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Buku</h2>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">Kode Buku</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Stok</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>{{ $buku->kode_buku }}</td>
                <td>{{ $buku->judul_buku }}</td>
                <td>{{ $buku->penulis_buku }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>{{ $buku->stok }} Pcs</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
