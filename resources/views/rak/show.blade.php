@extends('template.welcome')

@section('title', 'Rak')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Rak</h2>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">Nama Rak</th>
                <th scope="col">Lokasi Rak</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Detail Buku</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>{{ $rak->nama_rak }}</td>
                <td>{{ $rak->lokasi_rak }}</td>
                <td>@forelse ($rak->buku as $buku)
                    {{ $buku->judul_buku }}
                </td>
                <td><a href="{{ route('buku.show', $buku->id) }}" class="btn btn-sm btn-primary">Detail</a></td>
                @empty
                    lahhh ilang
                @endforelse
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
