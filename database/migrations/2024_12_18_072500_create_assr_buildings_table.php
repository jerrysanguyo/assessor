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
            $table->string('TDNo', 20);
            $table->double('Area');
            $table->string('Roof', 50);
            $table->string('1stFlooring', 30);
            $table->string('2ndFlooring', 30);
            $table->string('3rdFlooring', 30);
            $table->string('4thFlooring', 50);
            $table->string('Description', 100);
            $table->double('Unit_Value');
            $table->double('Market_Value');
            $table->string('Remarks', 20);
            $table->string('TypeOfStructure', 100);
            $table->string('AU', 30);
            $table->double('AL');
            $table->double('AV');
            $table->string('Story', 20);
            $table->unsignedTinyInteger('Exempt');
            $table->unsignedTinyInteger('Additional');
            $table->double('AdjLvl');
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
