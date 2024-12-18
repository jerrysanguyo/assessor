<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_feed extends Model
{
    use HasFactory;

    protected $table = 'assr_feeds';
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
