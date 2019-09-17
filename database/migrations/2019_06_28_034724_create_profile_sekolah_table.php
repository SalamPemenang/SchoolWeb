<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_sekolah', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('logo', 300)->nullable();
            $table->string('nama',50)->nullable();
            $table->string('npsn',20)->nullable();
            $table->string('nis',15)->nullable();
            $table->string('kode_un',5)->nullable();
            $table->string('alamat',225)->nullable();
            $table->string('no_hp',15)->nullable();
            $table->string('faximile', 20)->nullable();
            $table->string('no_sk_pendirian_sekolah',50)->nullable();
            $table->string('website',40)->nullable();
            $table->string('email',40)->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('twitter',200)->nullable();
            $table->string('instagram',60)->nullable();
            $table->string('maps',500)->nullable();
            $table->date('tgl_pendirian',6)->nullable();
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
        Schema::dropIfExists('profile_sekolah');
    }
}
