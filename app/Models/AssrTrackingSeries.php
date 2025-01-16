<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrTrackingSeries extends Model
{
    use HasFactory;
    
    protected $table = 'assr_tracking_series';
    protected $fillable = [
        'Date',
        'DeptCode',
        'Series'
    ];
}
