<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_previous extends Model
{
    use HasFactory;
    
    protected $table = 'assr_previouses';
    protected $fillable = [
        'TDNumber',
        'prevTDNumber',
        'PrevPIDNo',
        'PreviousOwner',
        'PrevAV',
        'year',
        'partOf',
        'temp',
        'Duplicate'
    ];
}
