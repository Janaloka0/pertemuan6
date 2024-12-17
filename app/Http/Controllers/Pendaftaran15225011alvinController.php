<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dokter15225011alvin;
use App\Models\Pasien15225011alvin;
use App\Models\Pendaftaran15225011alvin;
use Illuminate\Http\Request;

class Pendaftaran15225011alvinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftaran = Pendaftaran15225011alvin::with(['pasien', 'dokter'])->get();

        // Ambil semua pasien dan dokter
        $pasiens = Pasien15225011alvin::all();
        $dokters = Dokter15225011alvin::all();

        foreach ($pendaftaran as $item) {
            $item->formatted_tanggal_daftar = Carbon::parse($item->tanggal_daftar)->translatedFormat('l, d-F-Y');
        }

        // Kirim data ke view
        return view('pendaftaran.pendaftaran15225011alvin', compact('pendaftaran', 'pasiens', 'dokters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasien15225011_alvin,id',
            'dokter_id' => 'required|exists:dokter15225011_alvin,id',
            'tanggal_daftar' => 'required|date',
        ]);

        $tanggalDaftar = \Carbon\Carbon::parse($request->tanggal_daftar)->format('Y-m-d');

        $lastQueueNumber = Pendaftaran15225011alvin::where('dokter_id', $request->dokter_id)
        ->whereDate('tanggal_daftar', $tanggalDaftar)
        ->max('nomor_antrian');

        $nomorAntrian = $lastQueueNumber ? $lastQueueNumber + 1 : 1;

        Pendaftaran15225011alvin::create([
            'pasien_id' => $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'nomor_antrian' => $nomorAntrian,
            'tanggal_daftar' => $request->tanggal_daftar,
        ]);

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil!');
    }
    public function destroy(string $id)
    {
        $pendaftaran = Pendaftaran15225011alvin::findOrFail($id);
        $pendaftaran->delete();
        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil dihapus!');
    }
}
