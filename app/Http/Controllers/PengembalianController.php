<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;
use App\Models\Anggota;
use App\Models\Petugas;
use App\Models\Buku;
use App\Models\Peminjaman;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengembalians = Pengembalian::all();
        return view('pengembalian.index', compact('pengembalians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bukus = Buku::all();
        $anggotas = Anggota::all();
        $petugas = Petugas::all();
        return view('pengembalian.create', compact('bukus', 'anggotas', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengembalian $pengembalian)
    {
        return view('pengembalian.show', compact('pengembalian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengembalian $pengembalian)
    {
        $pengembalian->delete();
        return redirect()->route('pengembalian.index');
    }
}
