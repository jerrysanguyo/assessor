<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrTransaction extends Model
{
    use HasFactory;
    
    protected $table = 'assr_transaction';
    protected $fillable = [
        'Transaction',
        'Code',
        'TimesUsed'
    ];
}
