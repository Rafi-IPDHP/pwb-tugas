@extends('template.welcome')

@section('title', 'Petugas')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Petugas</h2>
    <table class="table container">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Jabatan</th>
            <th scope="col">No Telp</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($petugas as $key => $petugas)
            <tr>
                <th scope="row">{{ $key +1 }}</th>
                <td>{{ $petugas->nama_petugas }}</td>
                <td>{{ $petugas->jabatan_petugas }}</td>
                <td>{{ $petugas->no_telp_petugas }}</td>
                <td class="d-flex justify-content-center gap-2">
                    <a href="{{ route('petugas.show', $petugas->id) }}" class="btn btn-primary btn-sm">Detail</a>
                    <a href="{{ route('petugas.edit', $petugas->id) }}" class="btn btn-warning btn-sm">Update</a>
                    <form action="{{ route('petugas.destroy', $petugas->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <a href="{{ route('petugas.create') }}" class="btn btn-primary">Add Petugas</a>
</div>
@endsection
