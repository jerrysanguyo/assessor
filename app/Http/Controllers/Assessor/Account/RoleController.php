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
    public function index(): View
    {
        $roles = Role::with('permissions')->get();
        return view('assessor.access-management.role.index', compact('roles'));
    }

    public function create(): View
    {
        $permission = Permission::all()->groupBy('group');
        return view('assessor.access-management.role.create', compact('permission'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'permissions' => 'nullable|array|exists:permissions,name',
        ]);

        $role = Role::create(['name' => $validatedData['name'], 'guard_name' => 'web']);
        $role->syncPermissions($validatedData['permissions'] ?? []);

        return redirect()->route('role.index')->with('success', 'Role created successfully.');
    }

    public function edit(string $id): View
    {
        $role = Role::with('permissions')->findOrFail($id);
        $permission = Permission::all()->groupBy('group');
        $rolePermissions = $role->permissions->pluck('name')->toArray();

        return view('assessor.access-management.role.edit', compact('role', 'permission', 'rolePermissions'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => "required|string|max:255|unique:roles,name,{$id}",
            'permissions' => 'nullable|array|exists:permissions,name',
        ]);

        $role = Role::findOrFail($id);
        $role->update(['name' => $validatedData['name'], 'guard_name' => 'web']);
        $role->syncPermissions($validatedData['permissions'] ?? []);

        return redirect()->route('role.index')->with('success', 'Role updated successfully.');
    }

    public function destroy(string $id): Response
    {
        $role = Role::findOrFail($id);

        if ($role->users()->exists()) {
            return response(['message' => 'Cannot delete a role assigned to users.'], 400);
        }

        $role->delete();
        return response(['message' => 'success'], 200);
    }
}
