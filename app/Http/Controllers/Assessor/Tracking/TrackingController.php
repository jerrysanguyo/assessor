<?php

namespace App\Http\Controllers\Assessor\Tracking;

use App\Models\AssrTracking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class TrackingController extends Controller
{
    public function index()
    {
        return view('assessor.tracking.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'noOfAccounts' => 'required|integer',
            'transaction' => 'required|string|max:255',
            'applicant' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'representative' => 'nullable|string|max:255',
            'contactNo' => 'required|string|max:20',
        ]);

        try {
            $trackingNo = now()->format('YmdHis') . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
            $latestNoUsed = AssrTracking::max('NoUsed') ?? 0;
            $newNoUsed = $latestNoUsed + 1;

            $tracking = AssrTracking::create([
                'NoOfTransaction' => $validatedData['noOfAccounts'],
                'TrackingNo' => $trackingNo,
                'Transaction' => $validatedData['transaction'],
                'Applicant' => $validatedData['applicant'],
                'Address' => $validatedData['address'],
                'Representative' => $validatedData['representative'],
                'ContactNo' => $validatedData['contactNo'],
                'Username' => auth()->user()->username ?? 'guest',
                'DeptCode' => 'ASSR',
                'Date' => now(),
                'NoUsed' => $newNoUsed,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Data saved successfully!',
                'data' => $tracking,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving the data.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function pdfExport()
    {
        $trackingData = AssrTracking::latest()->first();
        $pdf = Pdf::loadView('assessor.pdf.index', compact('trackingData'));
        return $pdf->stream('tracking_report.pdf');
    }
}
