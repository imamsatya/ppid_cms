<?php

namespace App\Http\Controllers\API\auth;

use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use App\Models\UserPPID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'jenispemohon' => 'required',
            'jenisidentitas' => 'required',
            'noidentitas' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'npwp' => 'required',
            'pekerjaan' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();

        $identitas = str_replace('data:image/png;base64,', '', $request['identitasfile']);
        $identitas = str_replace(' ', '+', $identitas);
        $identitasName = Str::random(10).'.'.'png';
        $identitasPath = 'adminAssets/user/identitas/';
        $identitasPath .= $identitasName;
        $file = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$identitas));
        Storage::disk('public_uploads')->put($identitasPath, $file);

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
            'identitas_file_path' =>  $identitasPath . $identitasName,
        ]);

        $credentials = request(['email', 'password']);

        if (! $token = Auth::guard('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json([
            'name' => $request['name'],
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('api')->factory()->getTTL() * 60
        ]);
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (! $token = Auth::guard('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(Auth::guard('api')->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Auth::guard('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(Auth::guard('api')->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('api')->factory()->getTTL() * 60
        ]);
    }

}
