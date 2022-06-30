<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('user_id')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_sarpras');
            $table->string('jml_sarpras');
            $table->string('kondisi_sebelum');
            $table->string('foto_pinjam');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->timestamp('tgl_pinjam')->nullable();
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
        Schema::dropIfExists('pinjams');
    }
}
