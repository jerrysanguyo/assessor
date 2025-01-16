<?php

namespace App\Http\Controllers\Assessor\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('assessor.dashboard.index');
    }
}
