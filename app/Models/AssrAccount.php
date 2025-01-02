<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AssrAccount extends Model
{
    use HasFactory;
    
    protected $table = 'assr_account';
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
        'Password', 'remember_token', 
    ];

    public function getAuthPassword()
    {
        return $this->Password; // Specify the password column
    }
}
