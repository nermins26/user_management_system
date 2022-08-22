<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{


    public function showAssignRole($user) {

        $user = User::where('id', $user)->first();
        $roles = Role::all();

        return view ('layouts.roles.assign', compact('user', 'roles'));

    }

    public function assignRole (Request $request, $user) {

        //dd($request);

        //update the role
        DB::table('users')
        ->where('id', $user)
        ->update([
            "status" => $request->input('role')
        ]);

        return redirect()->back()->with(['success' => 'Role/status updated successfully.']);
        

    }
}
