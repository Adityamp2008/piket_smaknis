<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AbsensiGuru extends Model
{
 protected $table = 'guru';
    protected $fillable = [
        'nama_guru',
        'tgl_lahir',
        'jns_klmn',
        'nip',
        'no_telp',
        'alamat',
    ];
}
  