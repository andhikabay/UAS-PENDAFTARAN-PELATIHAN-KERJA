<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Dashboard;
use App\Models\Pelatihan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $pesertas = Peserta::latest()->paginate(10);
        return view('peserta.index', compact('pesertas'));
    }

    public function create()
    {
        return view('peserta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pesertas',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        Peserta::create($request->all());
        return redirect()->route('peserta.index')->with('success', 'Peserta berhasil ditambahkan.');
    }

    public function edit(Peserta $peserta)
    {
        return view('peserta.edit', compact('peserta'));
    }

    public function update(Request $request, Peserta $peserta)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pesertas,email,' . $peserta->id,
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $peserta->update($request->all());
        return redirect()->route('peserta.index')->with('success', 'Peserta berhasil diperbarui.');
    }

    public function destroy(Peserta $peserta)
    {
        $peserta->delete();
        return redirect()->route('peserta.index')->with('success', 'Peserta berhasil dihapus.');
    }
}
