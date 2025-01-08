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
        Schema::create('assr_barangays', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('district', ['01', '02', 'EMBO']);
            $table->string('code')->nullable();
            $table->enum('remarks', ['Old', 'New'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_barangays');
    }
};
