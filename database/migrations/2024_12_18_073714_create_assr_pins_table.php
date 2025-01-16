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
            $table->string('PIN', 50);
            $table->string('Location', 500)->nullable();
            $table->string('LotNo', 50)->nullable();
            $table->string('BlkNo', 50)->nullable();
            $table->string('SurveyNo', 50)->nullable();
            $table->string('Kind', 50);
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
