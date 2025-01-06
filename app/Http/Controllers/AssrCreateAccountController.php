<?php

namespace App\Http\Controllers;

use App\Models\AssrAccount;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreAssrAccountRequest;
use App\Http\Requests\UpdateAssrAccountRequest;

class AssrCreateAccountController extends Controller
{
    public function index()
    {
        $assrAccount = AssrAccount::all();

        return response()->json([
            'message' => 'Assessor Account List',
            'data' => $assrAccount
        ], 200);
    }

    public function store(StoreAssrAccountRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $validated['Password'] = bcrypt($validated['Password']);

        $account = AssrAccount::create($validated);

        return response()->json([
            'message' => 'Account created successfully',
            'data' => $account
        ], 201);
    }

    public function show(string $id): JsonResponse
    {
        $account = AssrAccount::find($id);

        if (!$account) {
            return response()->json(['message' => 'Account not found'], 404);
        }

        return response()->json([
            'message' => 'Account fetched successfully',
            'data' => $account
        ], 200);
    }

    public function update(UpdateAssrAccountRequest $request, $id): JsonResponse
    {
        $validated = $request->validated();

        $account = AssrAccount::find($id);

        if (!$account) {
            return response()->json(['message' => 'Account not found'], 404);
        }

        $account->update($validated);

        return response()->json([
            'message' => 'Account updated successfully',
            'data' => $account
        ], 200);
    }
}
