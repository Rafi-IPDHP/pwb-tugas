@extends('template.welcome')

@section('title', 'Peminjaman')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Peminjaman</h2>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Judul Buku</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($peminjamans as $key => $peminjaman)
            <tr>
                <th>{{ $key + 1 }}</th>
                <td>{{ $peminjaman->tanggal_pinjam }}</td>
                <td>{{ $peminjaman->tanggal_kembali }}</td>
                <td>@forelse ($peminjaman->buku as $buku)
                    {{ $buku->judul_buku }}
                @empty
                    s
                @endforelse</td>
                <td class="d-flex justify-content-center gap-2">
                    <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" method="POST">
                        <a href="{{ route('peminjaman.show', $peminjaman->id) }}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-warning btn-sm">Update</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">Tambah Peminjaman</a>
</div>
@endsection
