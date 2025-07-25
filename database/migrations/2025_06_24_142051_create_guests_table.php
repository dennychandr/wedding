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
        Schema::create('guests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('jenis_tamu')->default('Pria');
            $table->string('jenis_undangan')->default('Teman');
            $table->integer('jumlah_pax');
            $table->text('link_drive')->nullable();
            $table->integer('visit_count')->default(0);
            $table->string('status')->default('Belum Jawab');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
