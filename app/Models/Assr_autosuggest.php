<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_autosuggest extends Model
{
    use HasFactory;
    
    protected $table = 'assr_autosuggests';
    protected $fillable = [
        'CreationDate',
        'Suggestion',
        'Username',
        'Type'
    ];
}
