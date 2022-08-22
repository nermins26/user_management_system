<?php

namespace App\Actions\Fortify;

use App\Models\Role;
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'user_name' => [
                'required', 
                'string', 
                'max:255',
                Rule::unique(User::class),
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'status' => ['string', 'max:255']
        ])->validate();

        /**
         * if user has been created using registration form
         * then it will have status writer by default
         */
        if(isset($input['status'])) {

            $status = Role::where('name', $input['status'])->first();

            return User::create([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'user_name' => $input['user_name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'status' => $status->id
            ]);

        }

        /**
         * in case of creating using registration form
         * this will be executed
         */
        return User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'user_name' => $input['user_name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);

        
    }
}
