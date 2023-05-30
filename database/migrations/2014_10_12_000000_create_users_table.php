<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id_user')->primary();
            $table->string('idposyandu')->nullable();
            $table->string('name');
            $table->string('nik')->unique();
            $table->string('no_hp');
            $table->string('password');
            // $table->string('id_posyandu')->nullable();
            $table->enum('role', ['superadmin','admin','pakar','pengguna'])->default('pengguna');
            $table->enum('status_users', ['aktif','tidak aktif'])-> default('aktif');
            $table->foreign('idposyandu')->references('idposyandu')->on('posyandus');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
