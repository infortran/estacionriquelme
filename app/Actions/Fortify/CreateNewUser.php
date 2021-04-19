<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'rut' => ['required', 'string', 'max:10', 'unique:users'],
            'g-recaptcha-response' => new Captcha()
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'rut' => $input['rut'],
            'password' => Hash::make($input['password']),
            'remember' => $input['remember']
        ]);
    }
}
