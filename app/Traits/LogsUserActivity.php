<?php

namespace App\Traits;

use App\Models\AssrLogsUserLogin;
use Illuminate\Support\Facades\Auth;

trait LogsUserActivity
{
    /**
     * Log user activity to the AssrLogsUserLogin table.
     *
     * @param string $event Description of the user action
     * @param string|null $deptCode Department code, default is "ASSR"
     * @param string|null $branch Branch location, default is "Main"
     * @return void
     */
    public function logUserActivity(string $event, ?string $deptCode = 'ASSR', ?string $branch = 'Main'): void
    {
        AssrLogsUserLogin::create([
            'Date' => now(),
            'Username' => Auth::user()->Username ?? 'Guest',
            'Event' => $event,
            'PCName' => gethostname() ?: 'Unknown',
            'PCUsername' => getenv('USERNAME') ?: getenv('USER') ?: 'Unknown',
            'PCAddress' => request()->ip(),
            'PCIPAddress' => request()->ip(),
            'DeptCode' => $deptCode ?? 'ASSR',
            'Branch' => $branch ?? 'Main',
        ]);
    }
}
