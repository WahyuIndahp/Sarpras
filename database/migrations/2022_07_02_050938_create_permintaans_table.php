<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ruang_id')->constrained('ruangs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('sarpras_id')->constrained('sarprases')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('tgl_minta')->nullable();
            $table->string('semester');
            $table->string('jumlah');
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
        Schema::dropIfExists('permintaans');
    }
}