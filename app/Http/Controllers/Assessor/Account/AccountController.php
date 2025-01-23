<?php

namespace App\Http\Controllers\Assessor\Account;

use App\Models\AssrAccount;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
        $columns = ['Username', 'Account Level'];
        $data = AssrAccount::all();
        return view('assessor.access-management.account.index', compact('columns', 'data'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('assessor.access-management.account.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'FirstName' => 'nullable|string|max:255',
            'LastName' => 'nullable|string|max:255',
            'MiddleName' => 'nullable|string|max:255',
            'Birthday' => 'nullable|date',
            'HideBday' => 'nullable|boolean',
            'TheBible' => 'nullable|string|max:255',
            'Username' => 'required|string|max:255|unique:assr_account,Username',
            'password' => 'required|string|confirmed|min:8',
            'Email' => 'nullable|email|unique:assr_account,Email',
            'Level' => 'nullable|string',
            'Status' => 'nullable|integer',
        ]);

        // Setting default values for nullable fields
        $validatedData['password'] = bcrypt($request->password);
        $validatedData['HideBday'] = $request->boolean('HideBday') ? 1 : 0;
        $validatedData['SBV'] = 0; // Default value for SBV
        $validatedData['SilentMode'] = 0; // Default value for SilentMode
        $validatedData['SN'] = 0; // Default value for SN
        $validatedData['Status'] = $request->input('Status', 0); // Default to 0 if not provided

        // Create the account
        $account = AssrAccount::create($validatedData);

        // Assign role based on the Level field, if provided
        if (!empty($account->Level)) {
            $account->assignRole($account->Level);
        }

        return redirect()
            ->route('dashboard.index')
            ->with('success', "Account for {$account->FirstName} {$account->LastName} created successfully.");
    }

    public function edit(string $id)
    {
        $account = AssrAccount::findOrFail($id);
        $roles = Role::all();
        return view('assessor.access-management.account.edit', compact('account', 'roles'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'MiddleName' => 'nullable|string|max:255',
            'Birthday' => 'required|date',
            'HideBday' => 'nullable|boolean',
            'TheBible' => 'nullable|string|max:255',
            'Username' => 'required|string|max:255|unique:assr_account,Username,' . $id,
            'password' => 'nullable|string|confirmed|min:8',
            'Email' => 'required|email|unique:assr_account,Email,' . $id,
            'Level' => 'required|string',
            'Status' => 'required|string',
        ]);

        $account = AssrAccount::findOrFail($id);

        if (!empty($request->password)) {
            $validatedData['password'] = bcrypt($request->password);
        } else {
            unset($validatedData['password']);
        }

        $account->update($validatedData);

        if (!empty($validatedData['Level'])) {
            $account->syncRoles([$validatedData['Level']]);
        }

        return redirect()
            ->route('dashboard.index')
            ->with('success', "Account for {$account->FirstName} {$account->LastName} updated successfully.");
    }
    public function destroy(string $id)
    {
        try {
            AssrAccount::findOrFail($id)->delete();
            return response()->json(['success' => true, 'message' => 'Record deleted successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
