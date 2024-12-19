<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrMessages extends Model
{
    use HasFactory;
    
    protected $table = 'assr_message';
    protected $fillable = [
        'ConID',
        'Sender',
        'Receiver',
        'MSG',
        'Date',
        'Opened'
    ];
}
