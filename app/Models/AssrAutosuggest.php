<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrAutosuggest extends Model
{
    use HasFactory;
    
    protected $table = 'assr_autosuggest';
    protected $fillable = [
        'CreationDate',
        'Suggestion',
        'Username',
        'Type'
    ];
}
