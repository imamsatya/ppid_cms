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

        if (Auth::guard('usersppid')
            ->attempt($request->only(['email', 'password']))
        ) {
            return redirect()
                ->route('dashboard.index');
        }


        return redirect()
            ->back()
            ->with('error', 'Invalid Credentials');
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
            $fileName = now()->getTimestampMs();
            $user = UserPPID::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'jenispemohon' => $request['jenispemohon'],
                'jenisidentitas' => $request['jenisidentitas'],
                'noidentitas' => $request['noidentitas'],
                'alamat' => $request['alamat'],
                'nohp' => $request['nohp'],
                'npwp' => $request['npwp'],
                'pekerjaan' => $request['pekerjaan'],
                'identitas_file_path' =>  'adminAssets/user/identitas/' . $fileName . $file->getClientOriginalExtension(),
            ]);
            $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());

            return redirect()
                ->route('dashboard.index');
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