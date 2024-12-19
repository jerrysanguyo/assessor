<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrFeed extends Model
{
    use HasFactory;

    protected $table = 'assr_feed';
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
