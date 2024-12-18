<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_pin extends Model
{
    use HasFactory;
    
    protected $table = 'assr_pins';
    protected $fillable = [
        'PIN',
        'Location',
        'LotNo',
        'BlkNo',
        'SurveyNo',
        'Kind'
    ];
}
