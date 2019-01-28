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
            $table->string('id_penulis',40);
            $table->string('id_penerbit',40);
            $table->string('id_jenis_cover',40);
            $table->string('id_kategori',40);
            $table->string('id_relasi_genre');
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
