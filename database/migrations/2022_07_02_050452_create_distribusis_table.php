<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribusis', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('ruang_id')->nullable();
            $table->foreignId('ruang_id')->constrained('ruangs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('semester');
            $table->string('deskripsi');
            $table->string('foto_bukti')->nullable();
            $table->string('foto_sarpras')->nullable();
            $table->timestamp('tgl_terima')->nullable();
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
        Schema::dropIfExists('distribusis');
    }
}