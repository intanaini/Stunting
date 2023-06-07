<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkembangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkembangans', function (Blueprint $table) {
            $table->string('idperkembangan')->primary();
            $table->string('idbalita');
            $table->string('panjang_badan');
            $table->string('umur');
            $table->enum('status', ['masuk','tahap','keluar']);
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
        Schema::dropIfExists('perkembangans');
    }
}
