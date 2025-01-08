<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_warga', function (Blueprint $table) {
            $table->id('id_warga'); // Primary Key
            $table->string('nama', 100);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->unsignedBigInteger('warga_id'); // Foreign Key
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
        Schema::dropIfExists('tb_warga');
    }
};
