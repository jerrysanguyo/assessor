<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_account extends Model
{
    use HasFactory;
    
    protected $table = 'assr_accounts';
    protected $fillable = [
        'FirstName',
        'LastName',
        'Birthday',
        'Status',
        'HideBday',
        'TheBible',
        'Username',
        'Password',
        'MiddleName',
        'Level',
        'Email',
        'SBV',
        'SilentMode',
        'SN'
    ];
    
    protected $hidden = [
        'Password'
    ];
}
