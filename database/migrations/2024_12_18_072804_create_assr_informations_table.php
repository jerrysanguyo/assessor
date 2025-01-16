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
        Schema::create('assr_information', function (Blueprint $table) {
            $table->id();
            $table->string('TDNo', 15);
            $table->string('PIDNo', 50)->nullable();
            $table->string('Owner', 5000);
            $table->string('Address', 500);
            $table->string('TelNo', 10)->nullable();
            $table->string('TIN', 20)->nullable();
            $table->string('Administrator', 2000)->nullable();
            $table->string('Address2', 500);
            $table->string('TelNo2', 10)->nullable();
            $table->string('TIN2', 20)->nullable();
            $table->string('LOP_HouseNo', 300)->nullable();
            $table->string('LOP_Street', 30)->nullable();
            $table->string('LOP_Barangay', 30);
            $table->string('LOP_Municipality', 30)->nullable();
            $table->string('KOP', 20);
            $table->string('Taxable', 20);
            $table->string('EARQtr', 10);
            $table->unsignedSmallInteger('EARYear');
            $table->string('DRDate', 10)->nullable();
            $table->string('AppraisedBy', 50);
            $table->string('ABDate', 20)->nullable();
            $table->string('RA', 50);
            $table->string('RADate', 20)->nullable();
            $table->string('AprovedBy', 50)->nullable();
            $table->string('DateAproved', 20)->nullable();
            $table->longText('Annotation');
            $table->longText('Memoranda')->nullable();
            $table->longText('Requirements')->nullable();
            $table->string('Status', 20);
            $table->string('LastProcessed', 300)->nullable();
            $table->string('Transaction', 200)->nullable();
            $table->text('Remarks')->nullable();
            $table->string('Barangay', 30);
            $table->string('TitleNumber', 50)->nullable();
            $table->string('LotNumber', 50)->nullable();
            $table->string('BlockNumber', 50)->nullable();
            $table->string('SurveyNum', 50)->nullable();
            $table->string('North', 200)->nullable();
            $table->string('East', 200)->nullable();
            $table->string('West', 200)->nullable();
            $table->string('South', 200)->nullable();
            $table->string('AssessmentLevel', 10);
            $table->string('Kind', 20);
            $table->string('ActualUse', 20);
            $table->string('TCTDated', 20)->nullable();
            $table->longText('landRef')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assr_information');
    }
};
