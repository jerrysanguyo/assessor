<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrPin extends Model
{
    use HasFactory;
    
    protected $table = 'assr_pin';
    protected $fillable = [
        'PIN',
        'Location',
        'LotNo',
        'BlkNo',
        'SurveyNo',
        'Kind'
    ];
}
