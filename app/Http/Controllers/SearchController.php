<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function orderQuery(Request $request) {

        $request->validate([
            'order_by' => 'max:64',
        ]);
        
        $orderBy = $request->input('order_by');
        
        if ($orderBy == "created_at") {
            $users = User::orderBy($orderBy, 'desc')->paginate(10);
        } else {
            $users = User::orderBy($orderBy, 'asc')->paginate(10);
        }

        //for search partial
        $permissions = Permission::all();
        $roles = Role::all();

        //for displaying users
        $paginator = new Paginator($users, 10);
        $counter = 0;
        
        return view('index', compact('users', 'counter', 'paginator', 'permissions', 'roles'));
       
    }


    public function searchQuery(Request $request) {

        $request->validate([
            'keywords' => 'max:64',
        ]);
        
        $keywords = $request->input('keywords');

        $users = User::where('first_name', 'LIKE', "%$keywords%")
        ->orWhere('first_name', 'LIKE', "%$keywords%")
        ->orWhere('last_name', 'LIKE', "%$keywords%")
        ->orWhere('user_name', 'LIKE', "%$keywords%")
        ->orWhere('email', 'LIKE', "%$keywords%")
        ->paginate(10);

        //for search partial
        $permissions = Permission::all();
        $roles = Role::all();

        //for displaying users
        $paginator = new Paginator($users, 10);
        $counter = 0;
        
        return view('index', compact('users', 'counter', 'paginator', 'permissions', 'roles'));

    }


    public function filterByRole(Request $request)
    {
        $request->validate([
            'role' => 'max:64',
        ]);

        $role = $request->input('role');
        
        
        $users = User::where('status', $role)->paginate(10);


        //for search partial
        $permissions = Permission::all();
        $roles = Role::all();

        //for displaying users
        $paginator = new Paginator($users, 10);
        $counter = 0;
        
        return view('index', compact('users', 'counter', 'paginator', 'permissions', 'roles'));
    }


        
}
