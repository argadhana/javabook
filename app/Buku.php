<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'bukus';
    protected $fillable = [
        'id',
        'id_penulis',
        'id_penerbit',
        'id_jenis_cover',
        'id_kategori',
        'id_relasi_genre',
        'judul',
        'tahun_terbit',
        'jumlah_halaman',
        'berat_buku',
        'p',
        'l',
        'id_bahasa',
        'ket',
        'stok'
    ];

    public $incrementing = false;
}
