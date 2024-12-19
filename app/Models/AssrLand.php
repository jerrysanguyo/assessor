<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrLand extends Model
{
    use HasFactory;
    
    protected $table = 'assr_land';
    protected $fillable = [
        'TDNo',
        'Class',
        'Area',
        'Unit_Value',
        'Adjustment',
        'Market_Value',
        'AU',
        'AL',
        'AV',
        'Description',
        'Exempt',
        'SubClass'
    ];
}
