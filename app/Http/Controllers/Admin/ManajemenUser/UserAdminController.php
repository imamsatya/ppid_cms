<?php

namespace App\Http\Controllers\Admin\ManajemenUser;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MiddlewareClient;
use Spatie\Permission\Models\Role;
use Session;
use DB;


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

        $param = $request->except('actionform','id','roles','id_bumn');
        // $param['id_bumn'] = $request->id_bum ? $request->id_bumn : (int)'';
        // $param['kategori_user_id']= 1

        if ($validated) {

            $res = MiddlewareClient::addUser($request);
            if ($res['status']==false){
                //dd('masuk sini');
                return redirect()->back()->withErrors(['msg'=> 'Gagal Menambahkan Data'])->withInput();
            } 

            $userExist = User::where('username',$request->username)->first();
            if ($userExist) {
                return redirect()->back()->withErrors(['msg'=> 'Data Sudah Ada'])->withInput();
            }
            $user = User::create((array)$param);
            $user->assignRole($request->input('roles'));
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

        $user = User::find($id);
        $param = $request->except('_token','_method','actionform','id','edit_roles','id_bumn');
        $user->update((array)$param);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('edit_roles'));

        return back()->with('success', 'Berhasil mengubah User :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $user = User::find($request->id);
        $response = MiddlewareClient::deleteUser($user->username);
        $user->roles()->detach();
        $user->delete();

        Session::flash('success', "Berhasil menghapus user");
    }

     public function checkuser(Request $request)
    {
      try{
        return response()->json(MiddlewareClient::getUserProfile($request->input('username')));          
      }catch(Exception $e){
        return back()->with('error', 'Gagal Menambah Data');
      }
    }
}
