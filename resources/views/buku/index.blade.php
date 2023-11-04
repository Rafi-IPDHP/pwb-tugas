@extends('template.welcome')

@section('title', 'buku')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Buku</h2>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Stok</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($bukus as $key => $buku)
            <tr>
                <th>{{ $key + 1 }}</th>
                <td>{{ $buku->judul_buku }}</td>
                <td>{{ $buku->penulis_buku }}</td>
                <td>{{ $buku->stok }} Pcs</td>
                <td class="d-flex justify-content-center gap-2">
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                        <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning btn-sm">Update</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
</div>
@endsection
