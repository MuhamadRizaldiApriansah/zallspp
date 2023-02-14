<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    use HasFactory;

    protected $table = 'spp';

    protected $primarykey = 'id_spp';

    protected $fiilable = [
        'tahun',
        'nominal'
    ];
}
