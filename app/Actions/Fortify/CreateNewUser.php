<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'lastname'=>['required','string','max:200'],
            'userId'=>['required','string','max:200'],
            'pnumber'=>['required','string','max:200'],

            ])->validate();

        return User::create([
            'name' => $input['name'],
            'lastname'=>$input['lastname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'userId'=>$input['userId'],
            'pnumber'=>$input['pnumber'],
            
        ]);
    }
}
