<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextBahasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_bahasas', function (Blueprint $table) {
            $table->string('id',40)->primary();
            $table->string('bahasa','100');
            $table->string('negara','100');
            $table->string('iso','2')->comment='https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes';
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
        Schema::dropIfExists('text_bahasas');
    }
}
