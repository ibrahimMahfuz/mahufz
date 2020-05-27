<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $primaryKey = 'nik';

    protected $fillable = [
        'nik', 'nama', 'tempat_lahir', 'tgl_lahir', 'alamat', 'pekerjaan'
    ];
}
