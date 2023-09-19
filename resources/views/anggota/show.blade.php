@extends('template.welcome')

@section('title', 'Anggota')

@section('content')
<div class="content-wrapper px-3">
    <h2 class="fw-semibold text-center py-3">Data Anggota</h2>
    <table class="table container">
        <thead>
          <tr>
            <th scope="col">Kode Anggota</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
            <th scope="col">No Telp</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>{{ $anggotas[0]->kode_anggota }}</td>
                <td>{{ $anggotas[0]->nama_anggota }}</td>
                <td>@if ($anggotas[0]->jk_anggota == "L")
                    Laki-Laki
                    @else
                    Perempuan
                @endif</td>
                <td>{{ $anggotas[0]->jurusan_anggota }}</td>
                <td>{{ $anggotas[0]->no_telp_anggota }}</td>
                <td>{{ $anggotas[0]->alamat_anggota }}</td>
            </tr>
        </tbody>
      </table>
      <div class="d-flex justify-content-end">
          <a href="{{ route('anggota.index') }}" class="btn btn-danger">Back</a>
      </div>
</div>
@endsection
