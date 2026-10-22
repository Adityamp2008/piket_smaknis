<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasTingkat extends Model
{
    protected $table = 'kelas_tingkat';

    protected $fillable = [
        'nama_tingkat',
    ];
}
