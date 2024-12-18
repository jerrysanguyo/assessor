<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_logs_user_login extends Model
{
    use HasFactory;
    
    protected $table = 'assr_logs_user_logins';
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
