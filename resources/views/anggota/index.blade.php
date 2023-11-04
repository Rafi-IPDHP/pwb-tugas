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
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">PERPUSTAKAAN</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this data?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <a href="{{ route('anggota.create') }}" class="btn btn-primary">Add Anggota</a>
</div>
@endsection