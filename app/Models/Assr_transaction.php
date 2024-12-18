<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_transaction extends Model
{
    use HasFactory;
    
    protected $table = 'assr_transaction';
    protected $fillable = [
        'Transaction',
        'Code',
        'TimesUsed'
    ];
}
