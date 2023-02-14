<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;


    protected $table = 'siswa';

    protected $primarykey = 'id_siswa';

    protected $fiilable = [
        'id_siswa',
        'nisn',
        'nis',
        'nama',
        'password',
        'id_kelas',
        'no_telp',
        'alamat',
    ];
}
