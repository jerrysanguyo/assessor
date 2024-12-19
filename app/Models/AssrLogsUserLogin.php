<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrLogsUserLogin extends Model
{
    use HasFactory;
    
    protected $table = 'assr_logs_user_login';
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
