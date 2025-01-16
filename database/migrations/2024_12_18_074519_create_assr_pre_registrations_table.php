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
        Schema::create('assr_pre_registration', function (Blueprint $table) {
            $table->id();
            $table->timestamp('CreationDate')->nullable();
            $table->string('TDNo', 20);
            $table->string('TrackingNo', 30)->nullable();
            $table->unsignedTinyInteger('Type');
            $table->string('Username', 30)->nullable();
            $table->string('Transaction', 300)->nullable();
            $table->string('TCN', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_pre_registration');
    }
};
