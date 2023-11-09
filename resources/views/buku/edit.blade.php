@extends('template.welcome')

@section('title', 'Buku')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="text-center">Data Buku</h1>
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
                            <form action="{{ route('buku.update', $buku->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-2">
                                    <label for="kode_buku" class="form-label">Kode Buku</label>
                                    <input type="number" name="kode_buku" class="form-control" id="kode_buku" value="{{ $buku->kode_buku }}">
                                </div>
                                <div class="mb-2">
                                    <label for="judul_buku" class="form-label">Judul Buku</label>
                                    <input type="text" name="judul_buku" class="form-control" id="judul_buku" value="{{ $buku->judul_buku }}">
                                </div>
                                <div class="mb-2">
                                    <label for="penulis_buku" class="form-label">Penulis Buku</label>
                                    <input type="text" name="penulis_buku" class="form-control" id="penulis_buku" value="{{ $buku->penulis_buku }}">
                                </div>
                                <div class="mb-2">
                                    <label for="tahun_terbit" class="form-label">Tahun Terbit Buku</label>
                                    <input type="text" name="tahun_terbit" class="form-control" id="tahun_terbit" value="{{ $buku->tahun_terbit }}">
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok Buku</label>
                                    <input type="number" name="stok" class="form-control" id="stok" value="{{ $buku->stok }}">
                                </div>
                                <div class="mb-2">
                                    <a href="{{ route('buku.index') }}" class="btn btn-secondary">Back</a>
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
