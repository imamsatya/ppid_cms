<?php

namespace App\Http\Controllers\Admin\ManajemenUser;

use App\Models\UserPPID;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Session;

class UserPemohonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $usersPPID = UserPPID::all();
        $usersPPID = DB::table('ppid_pendaftar')->select(
            'ppid_pendaftar.*',
            'jenis_pemohon.name as jenis_pemohon_name',
            'jenis_identitas.name as jenis_identitas_name',

        )
            ->leftjoin('jenis_pemohon', 'jenis_pemohon.id', '=', 'ppid_pendaftar.jenis_pemohon')
            ->leftjoin('jenis_identitas', 'jenis_identitas.id', '=', 'ppid_pendaftar.jenis_identitas')

            ->get();
        return view('admin.manajemen_user.user_pemohon', compact('usersPPID'));
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
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(UserPPID::class),
            ],
            'password' => ['required', 'min:6'],
            'password_confirmation' => ['required', 'same:password'],
            'jenispemohon' => ['required'],
            'jenisidentitas' => ['required'],
            'noidentitas' => ['required'],
            'alamat' => ['required'],
            'nohp' => ['required'],
            'npwp' => ['required'],
            'pekerjaan' => ['required'],
            'identitasfile' => ['required', 'mimes:png,jpg,jpeg', 'max:500']

        ]);
        if ($validated) {
            $file = $request['identitasfile'];
            $upload_path = 'adminAssets/user/identitas';
            $fileName = substr($request->name, 0, 5) . '-' . now()->getTimestampMs();
            $user = UserPPID::create([
                'nama_lengkap' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'jenis_pemohon' => $request['jenispemohon'],
                'jenis_identitas' => $request['jenisidentitas'],
                'nomor_identitas' => $request['noidentitas'],
                'alamat' => $request['alamat'],
                'no_hp' => $request['nohp'],
                'npwp' => $request['npwp'],
                'pekerjaan' => $request['pekerjaan'],
                'identitas_file_path' =>  'adminAssets/user/identitas/' . $fileName . '.' . $file->getClientOriginalExtension(),
            ]);

            $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/adminAssets/user/identitas', $fileName2);
            // $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());

            return redirect()
                ->back()->with('success', 'Berhasil menambah user');
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

        $validated = $request->validate([
            'name' => ['string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            // 'password' => ['required', 'min:6'],
            // 'password_confirmation' => ['required', 'same:password'],
            'jenispemohon' => ['required'],
            'jenisidentitas' => ['required'],
            'noidentitas' => ['required'],
            'alamat' => ['required'],
            'nohp' => ['required'],
            'npwp' => ['required'],
            'pekerjaan' => ['required'],
            'identitasfile' => ['mimes:png,jpg,jpeg', 'max:500']

        ]);
        if ($validated) {
            $file = $request['identitasfile'];
            $upload_path = 'adminAssets/user/identitas';
            $fileName = substr($request->name, 0, 5) . '-' . now()->getTimestampMs();
            $user = UserPPID::where('id', $id)->first();

            $user->nama_lengkap = $request['name'];
            $user->email = $request['email'];

            $user->jenis_pemohon = $request['jenispemohon'];
            $user->jenis_identitas = $request['jenisidentitas'];
            $user->nomor_identitas = $request['noidentitas'];
            $user->alamat = $request['alamat'];
            $user->no_hp = $request['nohp'];
            $user->npwp = $request['npwp'];
            $user->pekerjaan = $request['pekerjaan'];
            if ($file) {
                Storage::delete('public/' . $user->identitas_file_path);
                $user->identitas_file_path = 'adminAssets/user/identitas/' . $fileName . '.' . $file->getClientOriginalExtension();
                $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/adminAssets/user/identitas', $fileName2);
            }
            if ($request['password']) {
                $user->password = bcrypt($request['password']);
            }

            $user->save();

            return redirect()
                ->back()->with('success', 'Berhasil mengubah user');
        } else {
            return redirect()->back()->withErrors($validated)->withInput();
        }
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
        $user = UserPPID::where('id', $id)->first();
        Storage::delete('public/' . $user->identitas_file_path);

        $user = new UserPPID;
        $user = $user->where('id', $id)->delete();

        Session::flash('success', "Berhasil menghapus user");
    }
}
