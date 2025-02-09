<?php

namespace App\Services\Layout;

use App\Models\User;
use Filament\AvatarProviders\Contracts\AvatarProvider;
use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentColor;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\Color\Rgb;

class Avatar implements AvatarProvider
{

    public function get(Model | Authenticatable $record): string
    {

        $user = Auth::user();

        if(!is_null($user) && $user->type_user_id != 1){

            $user = User::with(['company', 'accredited', 'employee', 'manager', 'driver'])->find($user->id);

            if($user->type_user_id == 2) $logo = Storage::cloud()->url($user->employee->profile_photo);

            if($user->type_user_id == 3) $logo = Storage::cloud()->url($user->company->logo_path);

            if($user->type_user_id == 4) $logo = Storage::cloud()->url($user->manager->profile_photo);

            if($user->type_user_id == 5) $logo = Storage::cloud()->url($user->accredited->logo_path);

            return $logo;

        }

        $name = str(Filament::getNameForDefaultAvatar($record))
            ->trim()
            ->explode(' ')
            ->map(fn (string $segment): string => filled($segment) ? mb_substr($segment, 0, 1) : '')
            ->join(' ');

        $backgroundColor = Rgb::fromString('rgb(' . FilamentColor::getColors()['gray'][950] . ')')->toHex();

        return 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&color=FFFFFF&background=' . str($backgroundColor)->after('#');

    }

}
