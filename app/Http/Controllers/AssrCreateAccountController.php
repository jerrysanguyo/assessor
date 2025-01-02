<?php

namespace App\Http\Controllers;

use App\Models\AssrAccount;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAssrAccountRequest;

class AssrCreateAccountController extends Controller
{
    public function index()
    {
        return view('administrationMenu.user.index');
    }
    public function store(StoreAssrAccountRequest $request)
    {
        $validated = $request->validated();

        if ($request->has('Password')) {
            $validated['Password'] = bcrypt($validated['Password']);
        }

        $account = new AssrAccount();
        $account->FirstName = $validated['FirstName'];
        $account->LastName = $validated['LastName'];
        $account->MiddleName = $validated['MiddleName'];
        $account->Birthday = $validated['Birthday'];
        $account->Status = $validated['Status'];
        $account->HideBday = $validated['HideBday'];
        $account->TheBible = $validated['TheBible'];
        $account->Username = $validated['Username'];
        $account->Password = $validated['Password'];
        $account->Level = $validated['Level'];
        $account->Email = $validated['Email'];
        $account->SBV = $validated['SBV'];
        $account->SilentMode = $validated['SilentMode'];
        $account->SN = $validated['SN'];
        $account->save();

        return response()->json(['message' => 'Account created successfully'], 201);
    }
}
