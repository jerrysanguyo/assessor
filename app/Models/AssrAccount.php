<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AssrAccount extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'assr_account';
    protected $fillable = [
        'FirstName',
        'LastName',
        'Birthday',
        'Status',
        'HideBday',
        'TheBible',
        'Username',
        'password',
        'MiddleName',
        'Level',
        'Email',
        'SBV',
        'SilentMode',
        'SN'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
