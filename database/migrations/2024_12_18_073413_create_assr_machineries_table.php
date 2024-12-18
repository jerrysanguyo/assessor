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
        Schema::create('assr_machineries', function (Blueprint $table) {
            $table->id();
            $table->string('TDNo', 100);
            $table->string('Description', 100);
            $table->string('Date_Of_Operation', 100);
            $table->double('Replacement_Cost');
            $table->double('Depreciation');
            $table->double('Market_Value');
            $table->string('ESL', 100);
            $table->string('RoAD', 100);
            $table->string('AU', 20);
            $table->double('AL');
            $table->double('AV');
            $table->unsignedTinyInteger('Exempt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_machineries');
    }
};
