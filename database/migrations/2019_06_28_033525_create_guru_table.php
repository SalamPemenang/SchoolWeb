<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nuptk',15)->nullable();
            $table->string('nip',15)->nullable();
            $table->string('nama',50)->nullable();
            $table->string('jk',1)->nullable();
            $table->date('tgl_lahir',6)->nullable();
            $table->string('tmpt_lahir',50)->nullable();
            $table->string('alamat',50)->nullable();
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
        Schema::dropIfExists('guru');
    }
}
