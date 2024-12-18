<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_tracking_logs extends Model
{
    use HasFactory;
    
    protected $table = 'assr_tracking_logs';
    protected $fillable = [
        'Date',
        'TrackingNo',
        'TDNo',
        'Username',
        'Section',
        'Branch'
    ];
}
