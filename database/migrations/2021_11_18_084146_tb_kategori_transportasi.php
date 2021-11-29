<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbKategoriTransportasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tb_kategori_transportasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prov_id');
            $table->foreignId('city_id');
            $table->foreignId('distrik_id');
            $table->foreignId('sub_distrik_id');
            $table->string('nama');
            $table->enum('status',['aktif','tidak aktif']);
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
        //
    }
}
