<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerbitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerbits', function (Blueprint $table) {
            $table->string('id',32)->primary();
            $table->string('nama');
            $table->date('didirikan')->nullable();
            $table->string('kantor_pusat')->nullable();
            $table->string('pemilik')->nullable();
            $table->string('induk_perusahaan')->nullable();
            $table->string('situs_web')->nullable();
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
        Schema::dropIfExists('penerbits');
    }
}
