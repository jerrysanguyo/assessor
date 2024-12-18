<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_machinery extends Model
{
    use HasFactory;
    
    protected $table = 'assr_machinery';
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
