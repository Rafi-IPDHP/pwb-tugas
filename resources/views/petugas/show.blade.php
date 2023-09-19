@extends('template.welcome')

@section('title', 'Petugas')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Petugas</h2>
    <table class="table container">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">No Telp</th>
            <th scope="col">Alamat Petugas</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>{{ $petugas[0]->nama_petugas }}</td>
                <td>{{ $petugas[0]->jabatan_petugas }}</td>
                <td>{{ $petugas[0]->no_telp_petugas }}</td>
                <td>{{ $petugas[0]->alamat_petugas }}</td>
            </tr>
        </tbody>
      </table>
      <div class="d-flex justify-content-end">
          <a href="{{ route('petugas.index') }}" class="btn btn-danger">Back</a>
      </div>
</div>
@endsection
