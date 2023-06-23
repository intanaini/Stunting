<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAturansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aturans', function (Blueprint $table) {
            $table->string('idaturan',8)->primary();
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->string('umur',5);
            $table->string('panjang_badan',5);
            $table->enum('penyakit', ['stunting','tidak stunting']);
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
        Schema::dropIfExists('aturans');
    }
}
