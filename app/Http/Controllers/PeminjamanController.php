<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Petugas;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjamans = Peminjaman::all();
        return view('peminjaman.index', compact('peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bukus = Buku::all();
        $anggotas = Anggota::all();
        $petugas = Petugas::all();
        return view('peminjaman.create', compact('bukus', 'anggotas', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'id_buku' => 'required',
            'id_anggota' => 'required',
            'id_petugas' => 'required',
        ]);

        Peminjaman::create($request->all());
        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        return view('peminjaman.show', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        $bukus = Buku::all();
        $anggotas = Anggota::all();
        $petugases = Petugas::all();
        return view('peminjaman.edit', compact('peminjaman', 'bukus', 'anggotas', 'petugases'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'id_buku' => 'required',
            'id_anggota' => 'required',
            'id_petugas' => 'required',
        ]);

        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index');
    }
}
