<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporan_kejadian extends Model
{
    protected $table = 'laporan_kejadian';
    protected $fillable = [
        'laporan_kejadian',
        'tgl_kejadian',
        'deskripsi_kejadian',
        'status_laporan',
    ];
}