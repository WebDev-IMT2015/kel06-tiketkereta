<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function(Blueprint $table) {
            $table->increments('id_kereta');
            $table->string('kode_kereta');
            $table->string('nama_kereta');
            $table->integer('jumlah_gerbong');
            $table->integer('kapasitas_per_gerbong');
            $table->string('tujuanawal');
            $table->string('tujuanakhir');
            $table->time('jamberangkat');
            $table->time('jamtiba');
            $table->integer('tarif');
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
        Schema::drop('trains');
    }
}
