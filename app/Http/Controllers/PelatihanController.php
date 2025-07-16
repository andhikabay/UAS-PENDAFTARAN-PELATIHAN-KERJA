<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use App\Models\Peserta;
use App\Models\Dashboard;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index()
    {
        $pelatihans = Pelatihan::latest()->paginate(10);
        return view('pelatihan.index', compact('pelatihans'));
    }

    public function create()
    {
        return view('pelatihan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'kuota' => 'required|integer|min:1',
        ]);

        Pelatihan::create($request->all());
        return redirect()->route('pelatihan.index')->with('success', 'Pelatihan berhasil ditambahkan.');
    }

    public function edit(Pelatihan $pelatihan)
    {
        return view('pelatihan.edit', compact('pelatihan'));
    }

    public function update(Request $request, Pelatihan $pelatihan)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'kuota' => 'required|integer|min:1',
        ]);

        $pelatihan->update($request->all());
        return redirect()->route('pelatihan.index')->with('success', 'Pelatihan berhasil diperbarui.');
    }

    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan->delete();
        return redirect()->route('pelatihan.index')->with('success', 'Pelatihan berhasil dihapus.');
    }
}

