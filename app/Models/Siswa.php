<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'Siswa';
    protected $fillable = [
        'nama',
        'kelas_id',
        'jenis kelamin',
        'nis',
        'nisn',
        'alamat',
        'tanggal_lahir',  
    ];        
}