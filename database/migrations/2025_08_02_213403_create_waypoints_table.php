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
        Schema::create('waypoints', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('track_id')->constrained()->cascadeOnDelete();;
            $table->float('latitude');
            $table->float('longitude');
            $table->timestamp('date');
            $table->float('speed');
            $table->float('course');
            $table->float('altitude');
            $table->integer('satellites');
            $table->float('hdop');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waypoints');
    }
};
