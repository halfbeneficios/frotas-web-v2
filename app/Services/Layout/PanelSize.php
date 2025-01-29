<?php

namespace App\Services\Layout;

use Filament\Support\Enums\MaxWidth;

class PanelSize
{

    public static function default()
    {

        $url = url()->current();

        /* if(str_contains($url, '/tags')){

            return MaxWidth::FiveExtraLarge;

        } */

        return MaxWidth::SevenExtraLarge;

    }

}
