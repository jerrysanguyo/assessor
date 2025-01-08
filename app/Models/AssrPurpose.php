<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrPurpose extends Model
{
    use HasFactory;
    protected $table = "assr_purposes";
    protected $fillable = [
        'Purpose',
        'Code',
        'TimesUsed'
    ];
}
