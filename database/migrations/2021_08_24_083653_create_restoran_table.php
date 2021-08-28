<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restoran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_restoran', 100);
            $table->string('nama_pemilik', 100);
            $table->string('alamat', 100);
            $table->string('jenis_restoran', 100);
            $table->integer('kapasitas',12);
            $table->integer('skt_ramai',12);
            $table->integer('skt_normal',12);
            $table->integer('skt_sepi',12);
            $table->integer('tkt_ramai',12);
            $table->integer('tkt_normal',12);
            $table->integer('tkt_sepi',12);
            $table->integer('prt',100);
            $table->integer('potensi_pajak_ramai',100);
            $table->integer('potensi_pajak_normal',100);
            $table->integer('potensi_pajak_sepi',100);
            $table->integer('potensi_pajak',100);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restoran');
    }
}
