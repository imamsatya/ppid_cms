<?php

namespace App\Http\Controllers\Admin\ManajemenUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

class RolePermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();


        // return view('admin.manajemen_user.role_permission', compact('roles', 'permissions'));
        return view('admin.manajemen_user.role_permission2', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permissions = Permission::all();
        return view('admin.manajemen_user.add-role_permission', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        $validated = $request->validate([
            'name' => 'required',
            'permissions' => 'required',
        ]);

        if ($validated) {
            $role = Role::create(['name' => $request->name]);
            foreach ($request->permissions as $permission => $value) {
                $role->givePermissionTo($value);
            }
            return redirect()->back()->with('success', 'Berhasil menambahkan Role :)');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $role = Role::with('permissions')->where('id', $id)->first();
        $permissions =  utf8_encode(Permission::all());



        return view('admin.manajemen_user.edit-role_permission', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $role = Role::find($id);
        $role->name = $request->edit_name;
        $role->syncPermissions($request->permissions);
        $role->save();

        return back()->with('success', 'Berhasil mengubah Role :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        Session::flash('success', "Berhasil menghapus role");
    }
}
