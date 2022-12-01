<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'password_confirmation' => ['required', 'same:password'],
            'jenispemohon' => ['required'],
            'jenisidentitas' => ['required'],
            'noidentitas' => ['required'],
            'alamat' => ['required'],
            'nohp' => ['required'],
            'npwp' => ['required'],
            'pekerjaan' => ['required'],
            'identitasfile' => ['required', 'mimes:png,jpg,jpeg', 'max:500']
        ])->validate();
        $file = $input['identitasfile'];
        $upload_path = 'adminAssets/user/identitas';
        $fileName = now()->getTimestampMs();
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'jenispemohon' => $input['jenispemohon'],
            'jenisidentitas' => $input['jenisidentitas'],
            'noidentitas' => $input['noidentitas'],
            'alamat' => $input['alamat'],
            'nohp' => $input['nohp'],
            'npwp' => $input['npwp'],
            'pekerjaan' => $input['pekerjaan'],
            'identitas_file_path' =>  'adminAssets/user/identitas/' . $fileName . $file->getClientOriginalExtension(),
        ]);
        $file->move($upload_path, $fileName . '.' . $file->getClientOriginalExtension());
        $user->assignRole('user');
        return $user;
    }
}
