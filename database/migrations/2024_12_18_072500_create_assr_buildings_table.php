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
        Schema::create('assr_building', function (Blueprint $table) {
            $table->id();
            $table->string('TDNo', 20)->nullable();
            $table->double('Area')->nullable();
            $table->string('Roof', 50)->nullable();
            $table->string('1stFlooring', 30)->nullable();
            $table->string('2ndFlooring', 30)->nullable();
            $table->string('3rdFlooring', 30)->nullable();
            $table->string('4thFlooring', 50)->nullable();
            $table->string('Description', 100)->nullable();
            $table->double('Unit_Value')->nullable();
            $table->double('Market_Value')->nullable();
            $table->string('Remarks', 20)->nullable();
            $table->string('TypeOfStructure', 100)->nullable();
            $table->string('AU', 30)->nullable();
            $table->double('AL')->nullable();
            $table->double('AV')->nullable();
            $table->string('Story', 20)->nullable();
            $table->unsignedTinyInteger('Exempt')->nullable();
            $table->unsignedTinyInteger('Additional')->nullable();
            $table->double('AdjLvl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_building');
    }
};
