<?php

namespace App\Http\Controllers;

use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name'=>'writer']);
        // Permission::create(['name' => 'write post']);
        // $permission = Permission::create(['name' => 'edit post']);
        // $role = Role::findById(1);
        // $permission = Permission::findById(2);
        // $role->givePermissionTo($permission);
        // $role->revokePermissionTo($permission);

        // auth()->user()->givePermissionTo($permission);
        // auth()->user()->assignRole($role);
        // return auth()->user()->getAllPermissions();
        // return auth()->user()->revokePermissionTo('edit post');

        return auth()->user()->removeRole('writer');

        // return User::role('writer')->get();
        return view('home');
    }
}
