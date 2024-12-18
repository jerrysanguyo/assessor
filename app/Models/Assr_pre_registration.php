<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_pre_registration extends Model
{
    use HasFactory;
    
    protected $table = 'assr_pre_registrations';
    protected $fillable = [
        'CreationDate',
        'TDNo',
        'TrackingNo',
        'Type',
        'Username',
        'Transaction',
        'TCN'
    ];
}
