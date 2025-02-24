<?php

namespace App\Actions;

use Illuminate\Support\Str;

class ApiToken
{

    public static function create()
    {

        $data = Str::random(10);

        $key = Str::random(15);

        $hash = hash_hmac('sha256', $data, $key);

        $token = hash('md5', $hash . uniqid());

        return substr($token, 0, 32);

    }

}
