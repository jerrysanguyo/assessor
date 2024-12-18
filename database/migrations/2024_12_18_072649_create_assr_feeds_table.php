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
        Schema::create('assr_feeds', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Date');
            $table->string('Username', 30);
            $table->string('Event', 5000);
            $table->string('PCName', 30);
            $table->string('PCUsername', 30);
            $table->string('PCAddress', 12);
            $table->string('PCIPAddress', 66);
            $table->string('DeptCode', 10);
            $table->string('Branch', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_feeds');
    }
};
