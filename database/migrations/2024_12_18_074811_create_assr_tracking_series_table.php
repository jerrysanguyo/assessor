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
        Schema::create('assr_tracking_series', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Date');
            $table->string('DeptCode', 12);
            $table->unsignedSmallInteger('Series');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_tracking_series');
    }
};
