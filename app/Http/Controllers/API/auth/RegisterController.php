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
        Storage::put($identitasPath, $file);
        $user = UserPPID::create([
            'nama_lengkap' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'jenis_pemohon' => $request['jenispemohon'],
            'jenis_identitas' => $request['jenisidentitas'],
            'nomor_identitas' => $request['noidentitas'],
            'alamat' => $request['alamat'],
            'no_hp' => $request['nohp'],
            'npwp' => $request['npwp'],
            'pekerjaan' => $request['pekerjaan'],
            'identitas_file_path' =>  $identitasName,
        ]);
        $success['token'] =  $user->createToken('PPID')->plainTextToken;
        $success['name'] =  $user->name;

        return $this->sendResponse($success, 'User register successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('PPID')->plainTextToken;
            $success['name'] =  $user->getAuthIdentifierName();

            return $this->sendResponse($success, 'User login successfully.');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }
}
