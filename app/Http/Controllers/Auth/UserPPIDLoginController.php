<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserPPID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserPPIDLoginController extends Controller
{
    //

    // public function index()
    // {
    //     return view('admin.home');
    // }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register3');
    }

    public function handleLogin(Request $request)
    {
        dd($request);
        $validated = $request->validate([

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'password' => ['required', 'min:6'],
            'g-recaptcha-response' => 'recaptcha',
        ]);
        if (Auth::guard('usersppid')
            ->attempt($request->only(['email', 'password']))
        ) {


            return redirect()
                ->route('dashboard.index');
        }


        return redirect()
            ->back()
            ->with('error', 'Akun tidak valid');
    }

    public function handleRegister(Request $request)
    {

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
                ->route('userppid.login')->with('register-success', 'Berhasil mendaftar');
        }
    }

    public function logout()
    {
        Auth::guard('usersppid')
            ->logout();

        return redirect()
            ->route('userppid.login');
    }
}
