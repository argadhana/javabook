<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_cover extends Model
{
    protected $table = 'jenis_covers';
    protected $fillable = [
        'id',
        'jenis_cover',
        'ket'
    ];

    public $incrementing = false;
}
