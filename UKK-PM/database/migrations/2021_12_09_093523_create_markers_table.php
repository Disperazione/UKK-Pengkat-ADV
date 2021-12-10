<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markers', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi',255)->nullable();
            $table->string('kabupaten',255)->nullable();
            $table->string('kecamatan',255)->nullable();
            $table->string('kelurahan',255)->nullable();
            $table->string('address')->nullable();
            $table->string('latitude', 15)->nullable();
            $table->string('longitude', 15)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('id_pengaduan');
            $table->foreign('id_pengaduan')->references('id')->on('pengaduan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markers');
    }
}
