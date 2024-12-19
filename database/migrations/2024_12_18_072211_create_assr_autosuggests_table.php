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
        Schema::create('assr_autosuggest', function (Blueprint $table) {
            $table->id();
            $table->timestamp('CreationDate');
            $table->string('Suggestion', 300);
            $table->string('Username', 30);
            $table->unsignedTinyInteger('Type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_autosuggest');
    }
};
