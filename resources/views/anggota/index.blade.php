@extends('template.welcome')

@section('title', 'Anggota')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Anggota</h2>
    <table class="table container">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Anggota</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
            <th scope="col">No Telp</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($anggotas as $key => $anggota)
            <tr>
                <th scope="row">{{ $key +1 }}</th>
                <td>{{ $anggota->kode_anggota }}</td>
                <td>{{ $anggota->nama_anggota }}</td>
                <td>@if ($anggota->jk_anggota == "L")
                    Laki-Laki
                    @else
                    Perempuan
                @endif</td>
                <td>{{ $anggota->jurusan_anggota }}</td>
                <td>{{ $anggota->no_telp_anggota }}</td>
                <td class="d-flex justify-content-center gap-2">
                    <a href="{{ route('anggota.show', $anggota->id) }}" class="btn btn-primary btn-sm">Show</a>
                    <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-warning btn-sm">Update</a>
                    <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <a href="{{ route('anggota.create') }}" class="btn btn-primary">Add Anggota</a>
</div>
@endsection
