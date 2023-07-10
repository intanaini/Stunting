<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPerkembangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_perkembangans', function (Blueprint $table) {
            $table->string('iddetail_perkembangan',30)->primary();
            $table->string('idperkembangan',25);
            $table->dateTime('tanggal');
            $table->string('panjang_badan',5);
            $table->enum('status', ['masuk','tahap','keluar']);
            $table->timestamps();
            $table->foreign('idperkembangan')->references('idperkembangan')->on('perkembangans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_perkembangans');
    }
}
