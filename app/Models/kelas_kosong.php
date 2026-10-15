<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kelas_kosong extends Model
{
    protected $table = 'kelas_kosong';
    protected $fillable = [
        'kelas_kosong',
        'tingkat_id',
        'jurusan_id',
    ];
}