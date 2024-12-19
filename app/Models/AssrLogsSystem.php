<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrLogsSystem extends Model
{
    use HasFactory;
    
    protected $table = 'assr_logs_system';
    protected $fillable = [
        'Date',
        'Username',
        'Event',
        'PCName',
        'PCUsername',
        'PCAddress',
        'PCIPAddress',
        'DeptCode',
        'Branch'
    ];
}
