<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembenahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembenahans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kondisi_id')->constrained('kondisis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('detail_rusak');
            $table->string('status');
            $table->string('foto_kondisi');
            $table->timestamp('tgl_servis')->nullable();
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
        Schema::dropIfExists('pembenahans');
    }
}