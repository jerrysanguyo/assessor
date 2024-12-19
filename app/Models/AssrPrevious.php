<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrPrevious extends Model
{
    use HasFactory;
    
    protected $table = 'assr_previous';
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
