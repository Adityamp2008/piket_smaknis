<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jadwal_pikets extends Model
{
     protected $table = 'jadwal_pikets';
    protected $fillable = [
        'petugas_id',
        'hari',
        'mulai_jam',
        'selesai_jam',
    ];
}
