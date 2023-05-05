<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosas', function (Blueprint $table) {
            $table->string('idDiagnosa')->primary();
            $table->string('idaturan');
            $table->string('idbalita');
            $table->string('hasil_diagnosa');
            $table->foreign('idaturan')->references('idaturan')->on('aturans');
            $table->foreign('idbalita')->references('idbalita')->on('balitas');
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
        Schema::dropIfExists('diagnosas');
    }
}
