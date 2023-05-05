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
            $table->string('iddetail_perkembangan')->primary();
            $table->string('idperkembangan');
            $table->dateTime('tanggal');
            $table->string('panjang_badan');
            $table->foreign('idperkembangan')->references('idperkembangan')->on('perkembangans');
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
