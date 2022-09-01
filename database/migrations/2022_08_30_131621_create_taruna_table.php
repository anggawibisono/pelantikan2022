<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taruna', function (Blueprint $table) {
            $table->id();
            $table->string('nama_taruna');
            $table->string('slug');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('konfirmasi_kehadiran');
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
        Schema::dropIfExists('taruna');
    }
}
