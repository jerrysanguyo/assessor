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
        Schema::create('assr_account', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('MiddleName')->nullable();
            $table->date('Birthday')->nullable();
            $table->unsignedTinyInteger('Status')->nullable();
            $table->unsignedTinyInteger('HideBday')->nullable();
            $table->unsignedSmallInteger('TheBible')->nullable();
            $table->string('Username')->nullable();
            $table->string('password');
            $table->string('Level')->nullable();
            $table->string('Email')->nullable();
            $table->unsignedTinyInteger('SBV')->nullable();
            $table->unsignedTinyInteger('SilentMode')->nullable();
            $table->unsignedTinyInteger('SN')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_account');
    }
};
