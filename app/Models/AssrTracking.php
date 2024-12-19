<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssrTracking extends Model
{
    use HasFactory;
    
    protected $table = 'assr_tracking';
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
