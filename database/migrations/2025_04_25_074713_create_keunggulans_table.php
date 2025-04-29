<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeunggulansTable extends Migration
{
    public function up()
    {
        Schema::create('keunggulans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('warna')->nullable(); // contoh: blue-50, purple-50
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keunggulans');
    }
}