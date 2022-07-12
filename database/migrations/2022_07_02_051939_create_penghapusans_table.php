<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenghapusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghapusans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kondisi_id')->constrained('kondisis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status');
            $table->string('alasan_hps');
            $table->string('foto_kondisi');
            $table->timestamp('tgl_hps')->nullable();
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
        Schema::dropIfExists('penghapusans');
    }
}