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
        Schema::create('assr_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName', 30);
            $table->string('LastName', 30);
            $table->string('MiddleName', 30);
            $table->date('Birthday');
            $table->unsignedTinyInteger('Status');
            $table->unsignedTinyInteger('HideBday');
            $table->unsignedSmallInteger('TheBible');
            $table->string('Username', 30);
            $table->string('Password', 50);
            $table->string('Level', 30);
            $table->string('Email', 30);
            $table->unsignedTinyInteger('SBV');
            $table->unsignedTinyInteger('SilentMode');
            $table->unsignedTinyInteger('SN');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_accounts');
    }
};
