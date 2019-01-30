<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $table = 'penulis';
    protected $fillable = [
        'id',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'mulai_debut',
        'img',
        'ket'
    ];

    public $incrementing = false;
}
