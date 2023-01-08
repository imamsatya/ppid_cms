<?php

namespace App\Http\Controllers\Auth;

use App\Events\Auth\UserForgotPasswordEmail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\UserPPID;
use Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()

    {
        return view('auth.lupa-password');
        // return view('auth.forgetPassword');
    }



    public function submitForgetPasswordForm(Request $request)

    {
        $this->validate($request, ['email' => 'required|email|exists:ppid_pendaftar,email'], [
            'email.exists' => 'Email tidak ditemukan, Silakan cek kembali'
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        $user = UserPPID::where('email', $request->email)->first();

        event(new UserForgotPasswordEmail($token, $request->email, $user->nama_lengkap));
        // Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
        //     $message->to($request->email);
        //     $message->subject('Reset Password');
        // });

        return back()->with('success', 'Link Reset Password berhasil dikirim!');
    }



    public function showResetPasswordForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }



    public function submitResetPasswordForm(Request $request)

    {


        $request->validate([
            'email' => 'required|email|exists:ppid_pendaftar',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);


        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();



        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Token tidak valid!');
        }

        $user = UserPPID::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['email' => $request->email])->delete();
        return redirect()->route('userppid.login')->with('success', 'Password berhasil diubah!');
    }
}
