<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = ['peserta_id', 'pelatihan_id', 'status'];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function pelatihan()
    {
        return $this->belongsTo(Pelatihan::class);
    }

}

