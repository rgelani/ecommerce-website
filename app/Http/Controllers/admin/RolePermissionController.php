<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:role-list', ['only' => ['index']]);
        $this->middleware('permission:role-create', ['only' => ['create','store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        // return Role::with('users')->where('name',"user")->first();
        $roles = Role::with('permissions')->get();
        return view('admin.role-permission.index',compact('roles'));
    }

    public function create()
    {
        $allPermissions = Permission::all();
        return view('admin.role-permission.create',compact('allPermissions'));
    }

    public function store(Request $request)
    {
        $role = Role::create(['guard_name' => 'admin', "name" => $request->name]);
        $role->givePermissionTo($request->permissions);
        return redirect(route('admin.role.index'))->with('success','Role created successfully...');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $allPermissions = Permission::all();
        $permissions = $role->permissions->pluck('name')->toArray();
        return view('admin.role-permission.edit',compact('role','permissions','allPermissions'));
    }

    public function update(Request $request)
    {
        $role = Role::find($request->id);
        $role->permissions()->detach();
        $role->name = $request->name;
        $role->givePermissionTo($request->permissions);
        $isSave = $role->save();

        if ($isSave) {
            return redirect(route('admin.role.index'))->with('success','Role updated successfully...');
        } else {
            return back()->with('error','Opps, Something went wrong...');
        }
    }

    public function destroy(Request $request)
    {
        $role = Role::find($request->id);
        $user = $role->users->toArray();
        if($user == null)
        {
            $role->permissions()->detach();
            $role->delete();
            return response()->json('success');
        }
        else{
            return response()->json('error');
        }
    }


    public function createPermission(Request $request)
    {
        $admin =  Auth::guard('admin')->user()->id;
        $getAdminDetail = Admin::find($admin);
        $getAdminDetail->syncRoles(['seller-manager','admin', 'super-admin']);


        // $user = Admin::create([
        //     'name' => 'Testing',
        //     'email' => 'test1@example.com',
        //     'password' => '$2y$10$hnJBx0bJV/LsS5Pif25T5OZb958WulY/aFRSb.VZt5I8PdQySMp0C'
        // ]);
        // $user->assignRole(['super-admin', 'seller-manager']);
        // http://127.0.0.1:8000/Admin/role/create_permission?name=your permission name
        // return Permission::create(['guard_name' => 'admin', 'name' => $request->name]);
        // Artisan::call('optimize:clear');
        dd('created');
    }
}
