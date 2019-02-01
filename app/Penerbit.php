<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $table = 'penerbits';
    protected $fillable = [
        'id',
        'nama',
        'didirikan',
        'kantor_pusat',
        'pemilik',
        'induk_perusahaan',
        'situs_web',
        'img',
        'ket'
    ];
    public $incrementing = false;
}
