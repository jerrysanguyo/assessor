<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrBuilding extends Model
{
    use HasFactory;

    protected $table = 'assr_building';
    protected $fillable = [
        'TDNo',
        'Area',
        'Roof',
        '1stFlooring',
        '2ndFlooring',
        '3rdFlooring',
        '4thFlooring',
        'Description',
        'Unit_Value',
        'Market_Value',
        'Remarks',
        'TypeOfStructure',
        'AU',
        'AL',
        'AV',
        'Story',
        'Exempt',
        'Additional',
        'AdjLvl'
    ];
}
