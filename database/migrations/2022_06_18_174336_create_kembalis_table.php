<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKembalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kembalis', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('pinjam_id')->nullable();
            $table->foreignId('pinjam_id')->constrained('pinjams')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status');
            $table->string('kondisi_sesudah');
            $table->string('foto_kembali');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->timestamp('tgl_kembali')->nullable();
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
        Schema::dropIfExists('kembalis');
    }
}
