<?php

namespace App\Http\Controllers;

use App\Models\AssrPurpose;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\AssrPurposeSetupRequest;

class AssrPurposeController extends Controller
{
    public function index()
    {
        $assrPurpose = AssrPurpose::all();

        return response()->json([
            'message' => 'Assessor Purpose List',
            'data' => $assrPurpose
        ], 200);
    }

    public function store(AssrPurposeSetupRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $assrPurpose = AssrPurpose::create($validated);

        return response()->json([
            'message' => 'Purpose Setup created successfully',
            'data' => $assrPurpose
        ], 201);
    }

    public function destroy(string $id): Response
    {
        try {
            $assrPurpose = AssrPurpose::findOrFail($id)->delete();
            return response([
                'message' => 'success',
                'data' => $assrPurpose
            ], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong Please Try Again!'], 500);
        }
    }
}
