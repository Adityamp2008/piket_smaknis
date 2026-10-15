<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'Kelas';
    protected $fillable = [
        'nama',
        'tingkat',
        'jurusan',
        
    ];
}