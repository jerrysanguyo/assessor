<?php

namespace App\Http\Controllers\Assessor\Search;

use Illuminate\Http\Request;
use App\Exports\AssrPinExport;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Services\AssrPinService;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\Assessor\PinStoreRequest;
use App\Http\Requests\Assessor\PinUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class SearchController extends Controller
{
    protected $service;

    public function __construct(AssrPinService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $columns = ['PIN', 'Location', 'LotNo', 'BlkNo', 'SurveyNo', 'Kind'];
        $data = $this->service->getAllPins();
        return view('assessor.search.index', compact('columns', 'data'));
    }

    public function store(PinStoreRequest $request)
    {
        try {
            $validated = $request->validated();
            $this->service->createPin($validated);
            return response()->json(['success' => true, 'message' => 'Record added successfully!'], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        try {
            $record = $this->service->getPinById($id);
            return response()->json(['success' => true, 'data' => $record], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Record not found.'], 404);
        }
    }

    public function update(PinUpdateRequest $request, $id)
    {
        try {
            $validated = $request->validated();
            $this->service->updatePin($id, $validated);
            return response()->json(['success' => true, 'message' => 'Record updated successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $this->service->deletePin($id);
            return response()->json(['success' => true, 'message' => 'Record deleted successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
