<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = [
        'id',
        'genre',
        'keterangan'
    ];

    public $incrementing = false;

    public function penulis()
    {
        return $this->hasOne(Penulis::class);
    }
}
