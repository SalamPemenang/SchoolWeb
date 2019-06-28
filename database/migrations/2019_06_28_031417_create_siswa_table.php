<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nisn',15)->nullable();
            $table->string('nis',15)->nullable();
            $table->string('nama',50)->nullable();
            $table->string('jk',1)->nullable();
            $table->dateTimeTz('tgl_lahir',6)->nullable();
            $table->string('tmpt_lahir',50)->nullable();
            $table->string('foto',200)->default('default.jpg');
            $table->unsignedInteger('id_tahun_ajaran')->nullable();
            $table->foreign('id_tahun_ajaran')->references('id')->on('tahun_ajaran')->onDelete('cascade');
            $table->unsignedInteger('id_kelas')->nullable();
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade');
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
        Schema::dropIfExists('siswa');
    }
}
