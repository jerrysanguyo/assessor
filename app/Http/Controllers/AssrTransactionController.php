<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\AssrTransaction;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreAssrTransactionSetupRequest;

class AssrTransactionController extends Controller
{
    public function index()
    {
        $assrTransaction = AssrTransaction::all();

        return response()->json([
            'message' => 'Assessor Transaction List',
            'data' => $assrTransaction
        ], 200);
    }

    public function store(StoreAssrTransactionSetupRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $transactionSetup = AssrTransaction::create($validated);

        return response()->json([
            'message' => 'Transaction Setup created successfully',
            'data' => $transactionSetup
        ], 201);
    }

    public function destroy(string $id): Response
    {
        try {
            $assrTransaction = AssrTransaction::findOrFail($id)->delete();
            return response([
                'message' => 'success',
                'data' => $assrTransaction
            ], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong Please Try Again!'], 500);
        }
    }
}
