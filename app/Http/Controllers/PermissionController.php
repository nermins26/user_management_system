<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class PermissionController extends Controller
{


    public function showAssignPerms($role) {

        $role = Role::where('id', $role)->first();
        $permissions = Permission::all();

        return view ('layouts.perms.assign', compact('role', 'permissions'));

    }


    public function assignPerms(Request $request, $role) {

        $permissions = $request->except(['_token', '_method']);

        $role = Role::where('id', $role)->first();
        $role->permissions()->sync(array_values($permissions)); //sync all permissions with the role

        return redirect()->back()->with(['success' => 'Permissions updated successfully.']);
        
    }
}
