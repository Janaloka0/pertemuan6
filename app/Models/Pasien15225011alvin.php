<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien15225011alvin extends Model
{
    use HasFactory;

    protected $table = 'pasien15225011_alvin';

    protected $fillable = ['nama', 'tanggal_lahir', 'alamat'];

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran15225011alvin::class, 'pasien_id');
    }
}
