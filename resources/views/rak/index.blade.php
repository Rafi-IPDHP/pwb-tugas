@extends('template.welcome')

@section('title', 'rak')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Rak</h2>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Rak</th>
                <th scope="col">Lokasi Rak</th>
                <th scope="col">Judul Buku</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($raks as $key => $rak)
            <tr>
                <th>{{ $key + 1 }}</th>
                <td>{{ $rak->nama_rak }}</td>
                <td>{{ $rak->lokasi_rak }}</td>
                <td>@forelse ($rak->buku as $buku)
                    {{ $buku->judul_buku }}
                @empty
                    lahhh ilanggg
                @endforelse</td>
                <td class="d-flex justify-content-center gap-2">
                    <form action="{{ route('rak.destroy', $rak->id) }}" method="POST">
                        <a href="{{ route('rak.show', $rak->id) }}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('rak.edit', $rak->id) }}" class="btn btn-warning btn-sm">Update</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('rak.create') }}" class="btn btn-primary">Tambah Rak</a>
</div>
@endsection
