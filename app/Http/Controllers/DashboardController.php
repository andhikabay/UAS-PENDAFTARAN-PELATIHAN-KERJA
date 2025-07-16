<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Pelatihan;
use App\Models\Pendaftaran;


class DashboardController extends Controller
{
    public function index()
{
    return view('dashboard', [
        'jumlahPeserta' => Peserta::count(),
        'jumlahPelatihan' => Pelatihan::count(),
        'jumlahPendaftaran' => Pendaftaran::count(),

        // Tambahan untuk statistik grafik
        'pesertaPerPelatihan' => Pelatihan::withCount('pendaftaran')->get(),
        'statusStat' => Pendaftaran::select('status', \DB::raw('count(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status'),
    ]);
}
}

