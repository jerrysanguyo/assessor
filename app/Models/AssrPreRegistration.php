<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrPreRegistration extends Model
{
    use HasFactory;
    
    protected $table = 'assr_pre_registration';
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
