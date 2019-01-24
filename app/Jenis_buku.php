<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_buku extends Model
{
	protected $table = 'jenis_buku';
	protected $fillable = [
		'id',
		'jenis_buku',
		'keterangan'
	];

    public $incrementing = false;
}
