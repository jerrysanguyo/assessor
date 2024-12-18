<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_information extends Model
{
    use HasFactory;

    protected $table = 'assr_informations';
    protected $fillable = [
        'TDNo',
        'PIDNo',
        'Owner',
        'Address',
        'TelNo',
        'TIN',
        'Administrator',
        'Address2',
        'TelNo2',
        'TIN2',
        'LOP_HouseNo',
        'LOP_Street',
        'LOP_Barangay',
        'LOP_Municipality',
        'KOP',
        'Taxable',
        'EARQtr',
        'EARYear',
        'DRDate',
        'AppraisedBy',
        'ABDate',
        'RA',
        'RADate',
        'AprovedBy',
        'DateAproved',
        'Annotation',
        'Memoranda',
        'Requirements',
        'Status',
        'LastProcessed',
        'Transaction',
        'Remarks',
        'Barangay',
        'TitleNumber',
        'LotNumber',
        'BlockNumber',
        'SurveyNum',
        'North',
        'East',
        'West',
        'South',
        'AssessmentLevel',
        'Kind',
        'ActualUse',
        'TCTDated',
        'landRef'
    ];
}
