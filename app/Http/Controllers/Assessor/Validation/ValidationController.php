<?php

namespace App\Http\Controllers\Assessor\Validation;

use App\Models\AssrBuilding;
use Illuminate\Http\Response;
use App\Models\AssrInformation;
use App\Http\Controllers\Controller;
use App\Services\PropertyAppraisalService;
use App\Http\Requests\Assessor\PropertAppraisalStoreRequest;
use App\Http\Requests\Assessor\PropertAppraisalUpdateRequest;

class ValidationController extends Controller
{
    protected $propertyAppraisalService;

    public function __construct(PropertyAppraisalService $propertyAppraisalService)
    {
        $this->propertyAppraisalService = $propertyAppraisalService;
    }

    public function index()
    {
        $data = AssrInformation::all();
        $columns = ['TDNo', 'Name Of Owner', 'Location of property', 'Status'];
        return view('assessor.validation.index', compact('columns', 'data'));
    }
    public function show(String $id)
    {
        $data = AssrInformation::findOrFail($id);
        $dataPropertyAppraisal = AssrBuilding::where('TDNo', $data->TDNo)->get();
        $totalFloorArea = $dataPropertyAppraisal->sum('Area');
        return view('assessor.validation.show', compact('data', 'dataPropertyAppraisal', 'totalFloorArea'));
    }


    public function destroy(string $id)
    {
        try {
            AssrInformation::findOrFail($id)->delete();
            return response()->json(['success' => true, 'message' => 'Record deleted successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
    public function storePropertyAppraisal(PropertAppraisalStoreRequest $request)
    {
        $validatedData = $request->validated();
        try {
            $appraisal = $this->propertyAppraisalService->store($validatedData);
            return response()->json(['success' => true, 'data' => $appraisal], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function editPropertyAppraisal(string $id)
    {
        try {
            $appraisal = $this->propertyAppraisalService->edit($id);
            return response()->json(['success' => true, 'data' => $appraisal], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function updatePropertyAppraisal(PropertAppraisalUpdateRequest $request, string $id)
    {
        $validatedData = $request->validated();
        try {
            $appraisal = $this->propertyAppraisalService->update($validatedData, $id);
            return response()->json(['success' => true, 'data' => $appraisal], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function destroyPropertyAppraisal(string $id): Response
    {
        try {
            $appraisal = $this->propertyAppraisalService->destroy($id);
            return response(['message' => 'success', 'data' => $appraisal], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something went wrong. Please try again!'], 500);
        }
    }
}
