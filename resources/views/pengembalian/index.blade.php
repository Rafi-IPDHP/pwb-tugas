@extends('template.welcome')

@section('title', 'Pengembalian')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Peminjaman</h2>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Denda</th>
                <th scope="col">Judul Buku</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($pengembalians as $key => $pengembalian)
            <tr>
                <th>{{ $key + 1 }}</th>
                <td>{{ $pengembalian->tanggal_pengembalian }}</td>
                <td>{{ $pengembalian->denda }}</td>
                <td>@forelse ($pengembalian->buku as $buku)
                    {{ $buku->judul_buku }}
                @empty
                    s
                @endforelse</td>
                <td class="d-flex justify-content-center gap-2">
                    <form action="{{ route('pengembalian.destroy', $pengembalian->id) }}" method="POST">
                        <a href="{{ route('pengembalian.show', $pengembalian->id) }}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('pengembalian.edit', $pengembalian->id) }}" class="btn btn-warning btn-sm">Update</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('pengembalian.create') }}" class="btn btn-primary">Tambah Peminjaman</a>
</div>
@endsection
