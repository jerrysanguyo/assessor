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
        Schema::create('assr_messages', function (Blueprint $table) {
            $table->id();
            $table->string('ConID', 20);
            $table->string('Sender', 30);
            $table->string('Receiver', 30);
            $table->text('MSG');
            $table->dateTime('Date');
            $table->unsignedTinyInteger('Opened');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_messages');
    }
};
