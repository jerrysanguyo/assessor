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
        Schema::create('assr_pin', function (Blueprint $table) {
            $table->id();
            $table->string('PIN');
            $table->string('Location')->nullable();
            $table->string('LotNo')->nullable();
            $table->string('BlkNo')->nullable();
            $table->string('SurveyNo')->nullable();
            $table->string('Kind');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_pin');
    }
};
