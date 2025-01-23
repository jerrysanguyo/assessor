<?php

namespace App\Http\Controllers\Assessor\Account;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        return view('assessor.access-management.role.index');
    }


    public function create(): View
    {
        try {
            $permission = Permission::all()->groupBy('group');
            return view('assessor.access-management.role.create', compact('permission'));
        } catch (\Exception $e) {
            logger()->error('Error loading role creation form', ['error' => $e->getMessage()]);
            return redirect()->route('role.index')->with('error', 'Failed to load form. Please try again.');
        }
    }

    public function store(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'name' => ['required', 'max:255', 'unique:roles,name'],
                'permissions' => ['nullable', 'array'],
            ]);

            $role = Role::create(['guard_name' => 'web', 'name' => $request->name]);
            $role->syncPermissions($request->permissions);

            return redirect()->route('role.index')->with('success', 'Role created successfully.');
        } catch (\Exception $e) {
            logger()->error('Error creating role', [
                'error' => $e->getMessage(),
                'user_id' => auth()->id(),
                'name' => $request->name
            ]);
            return redirect()->route('role.index')->with('error', 'Failed to create role. Please try again.');
        }
    }

    public function edit(string $id): View
    {
        try {
            $role = Role::findOrFail($id);
            $permission = Permission::all()->groupBy('group');
            $rolePermissions = $role->permissions->pluck('name')->toArray();
            return view('assessor.access-management.role.edit', compact('role', 'permission', 'rolePermissions'));
        } catch (\Exception $e) {
            logger()->error('Error loading role edit form', [
                'error' => $e->getMessage(),
                'role_id' => $id
            ]);
            return redirect()->route('role.index')->with('error', 'Failed to load role for editing. Please try again.');
        }
    }


    public function update(Request $request, string $id): RedirectResponse
    {
        try {
            $request->validate([
                'name' => ['required', 'max:255', 'unique:roles,name,' . $id],
                'permissions' => ['nullable', 'array'],
            ]);

            $role = Role::findOrFail($id);
            $role->update(['guard_name' => 'web', 'name' => $request->name]);
            $role->syncPermissions($request->permissions);


            return redirect()->route('role.index')->with('success', 'Role updated successfully.');
        } catch (\Exception $e) {
            logger()->error('Error updating role', [
                'error' => $e->getMessage(),
                'role_id' => $id
            ]);
            return redirect()->route('role.index')->with('error', 'Failed to update role. Please try again.');
        }
    }

    public function destroy(string $id): Response
    {
        try {
            Role::findOrFail($id)->delete();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger()->error('Error deleting role', [
                'error' => $e->getMessage(),
                'role_id' => $id
            ]);
            return response(['message' => 'Something Went Wrong Please Try Again!'], 500);
        }
    }
}
