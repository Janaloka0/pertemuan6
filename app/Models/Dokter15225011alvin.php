<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter15225011alvin extends Model
{
    use HasFactory;

    protected $table = 'dokter15225011_alvin';

    protected $fillable = ['nama', 'spesialisasi'];

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran15225011alvin::class, 'dokter_id');
    }
}
