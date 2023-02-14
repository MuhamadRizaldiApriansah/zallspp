<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $primarykey = 'id_kelas';

    protected $fiilable = [
        'nama_kelas',
        'kompetensi_keahlian'
    ];
}
