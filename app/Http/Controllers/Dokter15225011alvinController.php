<?php

namespace App\Http\Controllers;

use App\Models\Dokter15225011alvin;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Dokter15225011alvinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokters = Dokter15225011alvin::all();
        return view('dokter.index', compact('dokters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
        ]);

        $dokter = new Dokter15225011alvin();
        $dokter->nama = $request->nama;
        $dokter->spesialis = $request->spesialis;
        $dokter->created_at = Carbon::now();
        $dokter->save();

        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dokter = Dokter15225011alvin::findOrFail($id);
        return view('dokter.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dokter = Dokter15225011alvin::findOrFail($id);
        return view('dokter.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
        ]);

        $dokter = Dokter15225011alvin::findOrFail($id);
        $dokter->nama = $request->nama;
        $dokter->spesialis = $request->spesialis;
        $dokter->updated_at = Carbon::now();
        $dokter->save();

        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokter = Dokter15225011alvin::findOrFail($id);
        $dokter->delete();

        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil dihapus.');
    }
}
