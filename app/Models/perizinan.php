<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class perizinan extends Model
{
    protected $table = 'perizinan';
    protected $fillable = [
        'id_guru',
        'tgl_izin',
        'alasan_izin',
        'status_izin',
    ];
}