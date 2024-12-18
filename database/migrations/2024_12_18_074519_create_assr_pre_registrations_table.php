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
        Schema::create('assr_pre_registrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps('CreationDate');
            $table->string('TDNo', 20);
            $table->string('TrackingNo', 30);
            $table->unsignedTinyInteger('Type');
            $table->string('Username', 30);
            $table->string('Transaction', 300);
            $table->string('TCN', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_pre_registrations');
    }
};
