<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_messages extends Model
{
    use HasFactory;
    
    protected $table = 'assr_messages';
    protected $fillable = [
        'ConID',
        'Sender',
        'Receiver',
        'MSG',
        'Date',
        'Opened'
    ];
}
