<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function AllPermissions(){
        $permissions = Permission::all();
        return view('backend.permissions.all_permissions', compact('permissions'));

    } //End Method

    public function AddPermission(){
        return view('backend.permissions.add_permission');
    } //End Method

    public function StorePermission(Request $request){
        $permission = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message'=> 'Permission Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permissions')->with($notification);
    }

    public function EditPermisssion($id){
        $permission = Permission::findOrFail($id);
        return view('backend.permissions.edit_permission', compact('permission'));
    }

    public function UpdatePermission(Request $request){

        $per_id = $request->id;

        Permission::findOrFail($per_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message'=> 'Permission Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permissions')->with($notification);
    }

    public function DeletePermission($id){
        Permission::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Permission Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permissions')->with($notification);
    }

    public function ImportPermission(){
        return view('backend.permissions.import_permission');
    }

    //Roles
    public function AllRoles(){
        $roles = Role::all();
        return view('backend.roles.all_roles', compact('roles'));

    } //End Method

    public function AddRole(){
        return view('backend.roles.add_role');
    } //End Method

    public function StoreRole(Request $request){
        $role = Role::create([
            'name' => $request->name,
        ]);

        $notification = array(
            'message'=> 'Role Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.roles')->with($notification);
    } //End Method

    
    public function EditRole($id){
        $role = Role::findOrFail($id);
        return view('backend.roles.edit_role', compact('role'));
    }

    public function UpdateRole(Request $request){

        $rol_id = $request->id;

        Role::findOrFail($rol_id)->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message'=> 'Role Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.roles')->with($notification);
    } //End Method

    public function DeleteRole($id){
        Role::findOrFail($id)->delete();

        $notification = array(
            'message'=> 'Role Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.roles')->with($notification);
    } //End Method


        //Role-Permission
    public function AddRolePermission(){
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();

        return view('backend.rolesetup.add_role_permission', compact('roles','permissions','permission_groups'));
    }

    public function RolePermissionStore(Request $request){

        $data = array();
        $permissions = $request->permission;

        foreach($permissions as $key => $item){
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        }
        $notification = array(
            'message'=> 'Role Permission Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.role.permission')->with($notification);

    }

    public function AllRolePermission(){
        $roles = Role::all();
        return view('backend.rolesetup.all_role_permission', compact('roles'));
    }

    public function EditRolePermission($id){
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();

        return view('backend.rolesetup.edit_role_permission', compact('role','permissions','permission_groups'));
    }

    public function UpdateRolePermission(Request $request, $id){
        $role = Role::findOrFail($id);
        $permissions = $request->permission;

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        $notification = array(
            'message'=> 'Role Permission Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.role.permission')->with($notification);
    }

    public function DeleteRolePermission($id){
        $role = Role::findOrFail($id);
        if (!is_null($role)) {
            $role->delete();
        }

        $notification = array(
            'message'=> 'Role Permission Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.role.permission')->with($notification);
    }
}
