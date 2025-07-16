<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $fillable = ['judul', 'deskripsi', 'tanggal_mulai', 'tanggal_selesai', 'kuota'];

    public function pendaftaran()
    {
        return $this->hasMany(\App\Models\Pendaftaran::class);
    }
}
