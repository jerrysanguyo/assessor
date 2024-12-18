<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assr_tracking extends Model
{
    use HasFactory;
    
    protected $table = 'assr_trackings';
    protected $fillable = [
        'Date',
        'TrackingNo',
        'Transaction',
        'Applicant',
        'Address',
        'Representative',
        'NoOfTransaction',
        'NoUsed',
        'ContactNo',
        'Username',
        'DeptCode'
    ];
}
