<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  

    public function modelHasRoles()
    {
        $modelHasRoles = \DB::table('model_has_roles')->get();
        $users = User::all();

        return view('admin.admin-has-roles', compact('modelHasRoles', 'users'));
    }

    public function deleteModelHasRole($role_id)
    {
        \DB::table('model_has_roles')->where('role_id',$role_id)->delete();

        return redirect()->route('admin.admin-has-roles')->with('success', 'Role deleted successfully.');
    }

    public function altermodelid(Request $request, $model_id)
    {
        \DB::table('model_has_roles')->where('model_id',$model_id)->update([
            'model_id'=> $request->input('model_id'),
        ]);

        return redirect()->route('admin.admin-has-roles')->with('success','Model id has been updated according to the id');
    }

    public function showid(Request $request, $id, $model_id)
    {
       \DB::table('model_has_roles')->where('model_id',$model_id)->get();

    }

    public function alterroleid(Request $request, $role_id)
    {
        \DB::table('model_has_roles')->where('role_id',$role_id)->update([
            'role_id'=> $request->input('role_id'),
        ]);

        return redirect()->route('admin.admin-has-roles')->with('success','Role id has been updated according to the id');
    }
    
}
