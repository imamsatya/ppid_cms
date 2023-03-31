<?php

namespace App\Http\Controllers\Auth;

use App\Events\Auth\UserActivationEmail;
use App\Http\Controllers\Controller;
use App\Models\UserPPID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        $request->validate([

            'email' => [
                'required',
                'string',
                'email',
                'max:255',

            ],
            'password' => ['required', 'min:8'],
            'g-recaptcha-response' =>  'recaptcha',

        ]);

        if (Auth::guard('usersppid')
            ->attempt($request->only(['email', 'password']))
        ) {

            //isVerified true
            if (Auth::guard('usersppid')->user()->isVerified) {
                return redirect()
                    ->route('dashboard.index');
            }

            Auth::guard('usersppid')
                ->logout();
            return redirect()
                ->route('userppid.login')->with('error-belum_verifikasi', 'Akun ' . $request->email . ' belum melakukan aktivasi');
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
            'password' => ['required', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', 'max:64'],
            'password_confirmation' => ['required', 'same:password'],
            'jenispemohon' => ['required'],
            'jenisidentitas' => ['required'],
            'noidentitas' => ['required'],
            'alamat' => ['required'],
            'nohp' => ['required'],
            // 'npwp' => ['required'],
            'pekerjaan' => ['required'],
            'identitasfile' => ['required'],
            'g-recaptcha-response' =>  'recaptcha',

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
                // 'npwp' => $request['npwp'],
                'pekerjaan' => $request['pekerjaan'],
                'identitas_file_path' =>  'adminAssets/user/identitas/' . $fileName . '.' . $file->getClientOriginalExtension(),
                'token_activation' => Str::random(6),
                'isVerified' => false
            ]);

            $fileName2 = $fileName . '.'  . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/adminAssets/user/identitas', $fileName2);
            // $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());

            //send email
            event(new UserActivationEmail($user));
            return redirect()
                ->route('userppid.verifikasi')->with('success', 'Berhasil mendaftar. Silakan cek email untuk melakukan aktivasi akun');
        }
    }

    public function lupaPassword()
    {
        return view('auth.lupa-password');
    }

    public function gantiPassword()
    {
        return view('auth.ganti-password');
    }

    public function handleGantiPassword(Request $request)
    {

        # Validation
        $request->validate([
            'old_password' => ['required', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', 'max:64'],
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Password lama tidak sesuai");
        }


        #Update the new Password
        UserPPID::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password berhasil diubah!");
    }

    public function logout()
    {
        Auth::guard('usersppid')
            ->logout();

        return redirect()
            ->route('userppid.login');
    }

    public function verifikasi()
    {
        return view('auth.verifikasi');
    }

    public function handleVerifikasi(Request $request)
    {

        $request->validate([
            'kode_otp' => 'required',
        ]);
        $user = UserPPID::where('token_activation', $request->kode_otp)->first();
        if ($user == null) {
            return redirect()->back()->with("error", "OTP Salah. Silakan cek kembali");
        } else {
            $user->update([
                'isVerified' => true,
                'token_activation' => null
            ]);
            return redirect()->route('userppid.login')->with("success", "Aktivasi akun berhasil");;
        }
    }

    public function handleResendOTP(Request $request)
    {
        $this->validate($request, ['email' => 'required|email|exists:ppid_pendaftar,email'], [
            'email.exists' => 'Email tidak ditemukan, Silakan cek kembali'
        ]);

        $user = UserPPID::where('email', $request->email)->first();

        if ($user == null) {
            return redirect()->back()->with('error', 'Email Tidak Ditemukan');
        } else {
            $user->token_activation = Str::random(6);
            $user->save();
            event(new UserActivationEmail($user));
            return redirect()->route('userppid.verifikasi')->with('success', 'Kode OTP Berhasil Dikirim. Silakan Cek Email Anda');
        }
    }
}
