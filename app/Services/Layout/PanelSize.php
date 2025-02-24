<?php

namespace App\Services\Layout;

use Filament\Support\Enums\MaxWidth;

class PanelSize
{

    public static function default()
    {

        $url = url()->current();

        if(str_contains($url, '/dashboard')){

            return MaxWidth::Full;

        }

        return MaxWidth::SevenExtraLarge;

    }

}
