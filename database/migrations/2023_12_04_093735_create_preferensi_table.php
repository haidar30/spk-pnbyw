<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('preferensi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pegawai');
            $table->index('id_pegawai');
            $table->string('bulan');
            $table->string('tahun');
            $table->float('nilai_preferensi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferensi');
    }
};
