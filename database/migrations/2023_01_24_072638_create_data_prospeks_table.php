<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_prospeks', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan');
            $table->string('client');
            $table->date('tanggal');
            $table->time('waktu');
            $table->foreignId('marketers_id')->default(1);
            $table->foreignId('jenisProspek_id');
            $table->text('keterangan');
            $table->boolean('is_validated')->default(false);
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
        Schema::dropIfExists('data_prospeks');
    }
};
