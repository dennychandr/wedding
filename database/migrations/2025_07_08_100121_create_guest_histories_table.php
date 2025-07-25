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
        Schema::create('guest_histories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('guest_id')->index()->constrained('guests');
            $table->string('nama')->nullable();
            $table->timestamp('last_click')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_histories');
    }
};
