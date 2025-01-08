<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrBarangay extends Model
{
    use HasFactory;
    protected $table = 'assr_barangays';

    protected $fillable = ['name','district','code','remarks'];
}
