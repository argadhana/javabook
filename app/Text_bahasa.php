<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text_bahasa extends Model
{
    protected $table = 'text_bahasas';
    protected $fillable = [
        'id',
        'bahasa',
        'negara',
        'iso',
        'ket'
    ];
    public $incrementing = false;
}
