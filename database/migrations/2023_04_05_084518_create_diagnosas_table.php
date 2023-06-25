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
            $table->string('idDiagnosa',25)->primary();
            $table->string('idaturan',8)->nullable();
            $table->string('idbalita',20)->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->string('hasil_diagnosa',15)->nullable();
            $table->foreign('idaturan')->references('idaturan')->on('aturans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('idbalita')->references('idbalita')->on('balitas')->onUpdate('cascade')->onDelete('cascade');
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
