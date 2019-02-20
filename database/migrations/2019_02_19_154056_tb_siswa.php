<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen', function(Blueprint $table){
            $table->increments('id');
            $table->string('nomor_induk');
            $table->string('nama');
            $table->string('kelas');
            $table->timestamps();
        });
        Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('foto');
            $table->string('nomor_induk');
            $table->string('name');
            $table->string('kelas');
            $table->string('agama');
            $table->string('email');
            $table->text('alamat');
            $table->string('kontak');
            $table->string('password');
            $table->integer('level_user');
            $table->timestamps();
            $table->remembertoken();
        });
        Schema::create('agama', function(Blueprint $table){
            $table->increments('id');
            $table->string('agama');
        });
        Schema::create('kelas', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama_kelas');
        });
        Schema::create('level_user', function(Blueprint $table){
            $table->increments('id');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absen');
        Schema::dropIfExists('user');
        Schema::dropIfExists('agama');
        Schema::dropIfExists('kelas');
        Schema::dropIfExists('level_user');
    }
}
