<?php

namespace App\Http\Controllers\API\auth;

use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
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
            'identitas_file_path' =>  $identitasPath.$identitasName,
        ]);

        $credentials = request(['email', 'password']);

        if (! $token = Auth::guard('api')->setTTL(999999)->attempt($credentials)) {
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

        if (! $token = Auth::guard('api')->setTTL(999999)->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Update profile api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateProfile(Request $request)
    {
        $currentUserId = Auth::guard('api')->id();
        $currentUser = Auth::guard('api')->user();
        $input = $request->all();
        $dateCreated = \Carbon\Carbon::now();

        $nama_lengkap = $currentUser->nama_lengkap;
        if (array_key_exists('nama_lengkap', $input)) {
            $nama_lengkap = $input['nama_lengkap'];
        }

        $jenis_pemohon = $currentUser->jenis_pemohon;
        if (array_key_exists('jenis_pemohon', $input)) {
            $jenis_pemohon = $input['jenis_pemohon'];
        }

        $jenis_identitas = $currentUser->jenis_identitas;
        if (array_key_exists('jenis_identitas', $input)) {
            $jenis_identitas = $input['jenis_identitas'];
        }

        $nomor_identitas = $currentUser->nomor_identitas;
        if (array_key_exists('nomor_identitas', $input)) {
            $nomor_identitas = $input['nomor_identitas'];
        }

        $alamat = $currentUser->alamat;
        if (array_key_exists('alamat', $input)) {
            $alamat = $input['alamat'];
        }

        $alamat = $currentUser->alamat;
        if (array_key_exists('alamat', $input)) {
            $alamat = $input['alamat'];
        }

        $npwp = $currentUser->npwp;
        if (array_key_exists('npwp', $input)) {
            $npwp = $input['npwp'];
        }

        $pekerjaan = $currentUser->pekerjaan;
        if (array_key_exists('pekerjaan', $input)) {
            $pekerjaan = $input['pekerjaan'];
        }

        $identitas_file_path = $currentUser->identitas_file_path;
        if (array_key_exists('identitas_file_path', $input)) {
            $identitas = str_replace('data:image/png;base64,', '', $input['identitas_file_path']);
            $identitas = str_replace(' ', '+', $identitas);
            $identitasName = Str::random(10).'.'.'png';
            $identitasPath = 'adminAssets/user/identitas/';
            $file = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$identitas));
            Storage::disk('public_uploads')->put($identitasPath, $file);
            $identitas_file_path = $identitasPath.$identitasName;
        }

        DB::table('ppid_pendaftar')->where('id', $currentUserId)->update([
            'nama_lengkap' => $nama_lengkap,
            'jenis_pemohon' => $jenis_pemohon,
            'jenis_identitas' => $jenis_identitas,
            'nomor_identitas' => $nomor_identitas,
            'alamat' => $alamat,
            'npwp' => $npwp,
            'pekerjaan' => $pekerjaan,
            'identitas_file_path' =>  $identitas_file_path,
            "updated_at" => $dateCreated
        ]);

        $newData = DB::table('ppid_pendaftar')
            ->select('*')
            ->where('ppid_pendaftar.id', $currentUserId)->first();

        return $this->sendResponse($newData,
            'User saved successfully');
    }

    /**
     * Update password api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function updatePassword(Request $request)
    {
        $currentUserId = Auth::guard('api')->id();
        $currentUser = Auth::guard('api')->user();
        $input = $request->all();
        $dateCreated = \Carbon\Carbon::now();

        DB::table('ppid_pendaftar')->where('id', $currentUserId)->update([
            'password' => bcrypt($input['password']),
            "updated_at" => $dateCreated
        ]);

        $newData = DB::table('ppid_pendaftar')
            ->select('*')
            ->where('ppid_pendaftar.id', $currentUserId)->first();

        return $this->sendResponse($newData,
            'User saved successfully');
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
