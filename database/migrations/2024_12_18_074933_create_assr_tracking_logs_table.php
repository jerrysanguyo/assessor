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
        Schema::create('assr_tracking_logs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Date');
            $table->string('TrackingNo', 20);
            $table->string('TDNo', 20);
            $table->string('Username', 30);
            $table->string('Section', 20);
            $table->string('Branch', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_tracking_logs');
    }
};
