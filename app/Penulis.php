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
        'tempat_tinggal',
        'kebangsaan',
        'pendidikan',
        'genre_id',
        'karya_terkenal',
        'mulai_debut',
        'img',
        'ket'
    ];

    public $incrementing = false;

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
