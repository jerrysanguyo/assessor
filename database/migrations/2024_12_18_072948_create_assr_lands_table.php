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
        Schema::create('assr_land', function (Blueprint $table) {
            $table->id();
            $table->string('TDNo', 100);
            $table->string('Class', 100);
            $table->double('Area');
            $table->double('Unit_Value');
            $table->double('Adjustment');
            $table->double('Market_Value');
            $table->string('AU', 30);
            $table->double('AL');
            $table->double('AV');
            $table->string('Description', 200)->nullable();
            $table->unsignedTinyInteger('Exempt');
            $table->string('SubClass', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_land');
    }
};
