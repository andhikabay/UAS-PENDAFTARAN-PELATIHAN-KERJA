<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Peserta;
use App\Models\Pelatihan;
use app\models\dashboard;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::with(['peserta', 'pelatihan'])->latest()->paginate(10);
        return view('pendaftaran.index', compact('pendaftarans'));
    }

    public function create()
    {
        return view('pendaftaran.create', [
            'pesertas' => Peserta::all(),
            'pelatihans' => Pelatihan::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'peserta_id' => 'required|exists:pesertas,id',
            'pelatihan_id' => 'required|exists:pelatihans,id',
            'status' => 'required|in:terdaftar,mengikuti,lulus',
        ]);

        Pendaftaran::create($request->all());
        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil ditambahkan.');
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        return view('pendaftaran.edit', [
            'pendaftaran' => $pendaftaran,
            'pesertas' => Peserta::all(),
            'pelatihans' => Pelatihan::all()
        ]);
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $request->validate([
            'peserta_id' => 'required|exists:pesertas,id',
            'pelatihan_id' => 'required|exists:pelatihans,id',
            'status' => 'required|in:terdaftar,mengikuti,lulus',
        ]);

        $pendaftaran->update($request->all());
        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil diperbarui.');
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();
        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil dihapus.');
    }
}
