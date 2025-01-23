<?php

namespace App\Http\Controllers\Assessor\Logs;

use App\Http\Controllers\Controller;
use App\Models\AssrLogsUserLogin;
use App\Models\AssrLogsSystem;
class AssrLogController extends Controller
{
    public function indexSystemLogs()
    {
        $logs = AssrLogsSystem::orderBy('Date', 'desc')->get();
        return view('assessor.logs.system-logs', compact('logs'));
    }

    public function dashboardLogs()
    {
        $logs = AssrLogsUserLogin::orderBy('Date', 'desc')->take(5)->get();
        return view('assessor.dashboard.index', compact('logs'));
    }

    public function fetchUserLogs()
    {
        $logs = AssrLogsUserLogin::orderBy('Date', 'desc')->take(10)->get();
        return response()->json($logs);
    }
}
