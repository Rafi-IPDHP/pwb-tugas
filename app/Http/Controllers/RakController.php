<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rak;
use App\Models\Buku;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $raks = Rak::all();
        return view('rak.index', compact('raks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bukus = Buku::all();
        return view('rak.create', compact('bukus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_rak' => 'required',
            'lokasi_rak' => 'required',
            'id_buku' => 'required',
        ]);

        Rak::create($request->all());
        return redirect()->route('rak.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rak $rak)
    {

        return view('rak.show', compact('rak'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Rak $rak)
    {
        $bukus = Buku::all();
        return view('rak.edit', compact('rak', 'bukus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rak $rak)
    {
        $request->validate([
            'nama_rak' => 'required',
            'lokasi_rak' => 'required',
            'id_buku' => 'required',
        ]);

        $rak->update($request->all());
        return redirect()->route('rak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rak $rak)
    {
        $rak->delete();
        return redirect()->route('rak.index');
    }
}
