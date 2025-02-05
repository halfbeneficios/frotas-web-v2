<?php

namespace App\Actions;

use App\Models\RecentActivity as RecentActivityModel;
use Illuminate\Support\Facades\Auth;

class RecentActivity
{

    public static function create(String $message, $user = null): void
    {

        $user = is_null($user) ? Auth::user() : $user;

        $request = request();

        RecentActivityModel::create([
            'message' => $message,
            'user_id' => $user->id,
            'ip' => $request->ip(),
            'headers' => json_encode($request->headers->all()),
            'server' => json_encode($request->server->all()),
        ]);

    }

}
