@extends('template.welcome')

@section('title', 'Rak')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="text-center">Data Rak</h1>
            </div>
          </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <form action="{{ route('rak.update', $rak->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-2">
                                    <label for="nama_rak" class="form-label">Nama Rak</label>
                                    <input type="text" name="nama_rak" class="form-control" id="nama_rak" value="{{ $rak->nama_rak }}">
                                </div>
                                <div class="mb-2">
                                    <label for="lokasi_rak" class="form-label">Lokasi Rak</label>
                                    <input type="text" name="lokasi_rak" class="form-control" id="lokasi_rak" value="{{ $rak->lokasi_rak }}">
                                </div>
                                <div class="mb-4">
                                    <label for="judul_buku" class="form-label">Judul Buku</label>
                                    <select name="id_buku" class="form-select" id="judul_buku" aria-label="id_buku">
                                        <option disabled selected>@forelse ($rak->buku as $buku)
                                            {{ $buku->judul_buku }}
                                        @empty
                                        @endforelse</option>
                                        @foreach ($bukus as $buku)
                                        <option value="{{ $buku->id }}">{{ $buku->judul_buku }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <a href="{{ route('rak.index') }}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
