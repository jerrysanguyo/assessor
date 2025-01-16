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
        Schema::create('assr_previous', function (Blueprint $table) {
            $table->id();
            $table->string('TDNumber', 30);
            $table->string('prevTDNumber', 30)->nullable();
            $table->string('PrevPIDNo', 30)->nullable();
            $table->string('PreviousOwner', 5000);
            $table->double('PrevAV', 15, 2);
            $table->year('year')->nullable();
            $table->string('partOf', 50);
            $table->string('temp', 100)->nullable();
            $table->unsignedTinyInteger('Duplicate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_previous');
    }
};
