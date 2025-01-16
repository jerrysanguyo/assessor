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
        Schema::create('assr_tracking', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Date');
            $table->string('TrackingNo', 20);
            $table->string('Transaction', 100);
            $table->string('Applicant', 50);
            $table->string('Address', 50);
            $table->string('Representative', 50);
            $table->smallInteger('NoOfTransaction'); // Changed to smallInteger
            $table->smallInteger('NoUsed'); // Changed to smallInteger
            $table->string('ContactNo', 20)->nullable();
            $table->string('Username', 30);
            $table->string('DeptCode', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_tracking');
    }
};
