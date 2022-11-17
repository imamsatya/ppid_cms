<?php

namespace App\Http\Controllers\Admin\ManajemenUser;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Session;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::with('roles')->get();
        $roles = Role::with('permissions')->get();
        return view('admin.manajemen_user.user_admin', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'roles' => 'required',
        ]);

        if ($validated) {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            // $user->save();
            foreach ($request->roles as $role) {
                $user->assignRole($role);
            }
            $user->save();
            return redirect()->back()->with('success', 'Berhasil menambahkan User :)');
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

        $user = new User;
        $user = $user->where('id', $id)->first();
        $user->name = $request->edit_name;
        $user->email = $request->edit_email;
        if ($request->password) {
            $user->password = $request->edit_password;
        }
        $user->syncRoles($request->edit_roles);
        $user->save();

        return back()->with('success', 'Berhasil mengubah User :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = new User;
        $user = $user->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus user");
    }
}
