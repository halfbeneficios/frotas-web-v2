<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum PerformanceType: string implements HasLabel
{

    case ODOMETER = 'odometer';

    case HOURS_METER = 'hours_meter';

    public function getLabel(): string
    {
        return match ($this) {
            self::ODOMETER => 'Hodômetro',
            self::HOURS_METER => 'Horímetro',
        };
    }

}
