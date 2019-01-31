<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenulisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penulis', function (Blueprint $table) {
            $table->string('id',32)->primary();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('tempat_tinggal')->nullable();
            $table->string('kebangsaan')->nullable();
            $table->string('pendidikan')->nullable()->comment = 'Pendidikan Terakhir';
            $table->string('genre_id',32)->nullable()->comment = 'Aliran sastra(genre)';
            $table->string('karya_terkenal')->nullable();
            $table->date('mulai_debut')->nullable()->comment='Y-m-d';
            $table->string('img')->nullable();
            $table->text('ket')->nullable();
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
        Schema::dropIfExists('penulis');
    }
}
