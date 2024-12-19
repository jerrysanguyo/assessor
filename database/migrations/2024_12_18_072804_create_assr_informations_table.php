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
            $table->string('PIDNo', 50);
            $table->string('Owner', 5000);
            $table->string('Address', 500);
            $table->string('TelNo', 10);
            $table->string('TIN', 20);
            $table->string('Administrator', 2000);
            $table->string('Address2', 500);
            $table->string('TelNo2', 10);
            $table->string('TIN2', 20);
            $table->string('LOP_HouseNo', 300);
            $table->string('LOP_Street', 30);
            $table->string('LOP_Barangay', 30);
            $table->string('LOP_Municipality', 30);
            $table->string('KOP', 20);
            $table->string('Taxable', 20);
            $table->string('EARQtr', 10);
            $table->unsignedSmallInteger('EARYear');
            $table->string('DRDate', 10);
            $table->string('AppraisedBy', 50);
            $table->string('ABDate', 20);
            $table->string('RA', 50);
            $table->string('RADate', 20);
            $table->string('AprovedBy', 50);
            $table->string('DateAproved', 20);
            $table->longText('Annotation');
            $table->longText('Memoranda');
            $table->longText('Requirements');
            $table->string('Status', 20);
            $table->string('LastProcessed', 300);
            $table->string('Transaction', 200);
            $table->text('Remarks');
            $table->string('Barangay', 30);
            $table->string('TitleNumber', 50);
            $table->string('LotNumber', 50);
            $table->string('BlockNumber', 50);
            $table->string('SurveyNum', 50);
            $table->string('North', 200);
            $table->string('East', 200);
            $table->string('West', 200);
            $table->string('South', 200);
            $table->string('AssessmentLevel', 10);
            $table->string('Kind', 20);
            $table->string('ActualUse', 20);
            $table->string('TCTDated', 20);
            $table->longText('landRef');
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
