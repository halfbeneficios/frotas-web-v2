<?php

namespace App\Actions;

use App\Models\Company;
use App\Models\Manager;
use Illuminate\Support\Facades\Auth;

class GetCompany
{

    public static function find()
    {

        $user = Auth::user();

        if($user->type_user_id == 3) {

            $company = Company::where('user_id', $user->id)->first();

        }

        if($user->type_user_id == 4) {

            $manager = Manager::where('user_id', $user->id)->first();

            $company = Company::find($manager->company_id);

        }

        return $company;

    }

}
