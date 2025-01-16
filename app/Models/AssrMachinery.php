<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrMachinery extends Model
{
    use HasFactory;
    
    protected $table = 'assr_machinerie';
    protected $fillable = [
        'TDNo',
        'Description',
        'Date_Of_Operation',
        'Replacement_Cost',
        'Depreciation',
        'Market_Value',
        'ESL',
        'RoAD',
        'AU',
        'AL',
        'AV',
        'Exempt'
    ];
}
