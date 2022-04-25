<?php

namespace App\Services;

use Illuminate\Support\Str;

class AuthService
{

    public function createToken($user): string{
        $rand = Str::random('4');
        $token = $user->createToken($rand);
        return $token->plainTextToken;
    }


}
