<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrTrackingLogs extends Model
{
    use HasFactory;
    
    protected $table = 'assr_tracking_log';
    protected $fillable = [
        'Date',
        'TrackingNo',
        'TDNo',
        'Username',
        'Section',
        'Branch'
    ];
}
