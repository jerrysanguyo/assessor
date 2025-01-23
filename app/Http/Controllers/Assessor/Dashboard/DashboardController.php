<?php

namespace App\Http\Controllers\Assessor\Dashboard;

use Illuminate\Http\Request;
use App\Traits\LogsUserActivity;
use App\Models\AssrLogsUserLogin;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    use LogsUserActivity;
    public function index()
    {
        $logs = AssrLogsUserLogin::orderBy('Date', 'desc')->take(10)->get();
        return view('assessor.dashboard.index', compact('logs'));
    }

    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'TheBible' => 'required|string|max:500',
    //     ]);

    //     $user = auth()->user();
    //     $user->update(['TheBible' => $request->TheBible]);

    //     $this->logUserActivity("Updated 'TheBible' field with the content: '{$request->TheBible}'.");

    //     return redirect()
    //         ->back()
    //         ->with('success', 'The Bible text has been updated successfully!');
    // }


}
