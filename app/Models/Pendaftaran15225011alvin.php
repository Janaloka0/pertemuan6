<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran15225011alvin extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran15225011_alvin';

    protected $fillable = ['pasien_id', 'dokter_id', 'tanggal_daftar', 'nomor_antrian'];

    public function pasien()
    {
        return $this->belongsTo(Pasien15225011alvin::class, 'pasien_id');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter15225011alvin::class, 'dokter_id');
    }
}
