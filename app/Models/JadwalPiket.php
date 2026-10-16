<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalPiket extends Model
{
    protected $table = 'jadwal_piket';
    protected $fillable = [
            'petugas_id',
            'hari',
            'jam_mulai',
            'jam_selesai',
            
    ];
}
