<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->string('idchat')->primary();
            $table->string('idpengirim');
            $table->string('idpenerima');
            $table->longText('isi_text');
            $table->string('pakar');
            $table->dateTime('tanggal');
            $table->foreign('idpengirim')->references('id_user')->on('users');
            $table->foreign('idpenerima')->references('id_user')->on('users');
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
        Schema::dropIfExists('chats');
    }
}
