<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->string('id',40)->primary();
            $table->string('penulis_id',40);
            $table->string('penerbit_id',40);
            $table->string('jenis_cover_id',40);
            $table->string('kategori_id',40);
            $table->string('relasi_genre_id');
            $table->string('judul');
            $table->date('tahun_terbit',20);
            $table->unsignedInteger('jumlah_halaman')->nullable();
            $table->unsignedInteger('berat_buku')->nullable();
            $table->unsignedInteger('p')->nullable()->comment='Panjang Buku';
            $table->unsignedInteger('l')->nullable()->comment='Lebar Buku';
            $table->string('id_bahasa');
            $table->text('ket')->comment='Keterangan/Resensi Buku';
            $table->unsignedInteger('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
    }
}
