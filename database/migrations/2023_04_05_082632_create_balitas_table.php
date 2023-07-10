<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balitas', function (Blueprint $table) {
            $table->string('idbalita',20)->primary();
            $table->string('nik',18)->unique();
            $table->string('idortu',20);
            $table->string('nama_balita',60);
            $table->string('jenis_kelamin',15);
            $table->string('tempat_lahir',10);
            $table->dateTime('tanggal_lahir');
            $table->foreign('idortu')->references('id_user')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('balitas');
    }
}
