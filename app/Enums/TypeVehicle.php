<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum TypeVehicle: string implements HasLabel
{

    case AUTOMOBILE = 'Automóvel';

    case TRUCK = 'Caminhão';

    case MOTORCYCLE = 'Motocicleta';

    case BUS = 'Ônibus';

    case VAN = 'Van';

    case TRACTOR = 'Trator';

    case UTILITY = 'Utilitário';

    case OTHER = 'Outros';

    public function getLabel(): string
    {
        return match ($this) {
            self::AUTOMOBILE => 'Automóvel',
            self::TRUCK => 'Caminhão',
            self::MOTORCYCLE => 'Motocicleta',
            self::BUS => 'Ônibus',
            self::VAN => 'Van',
            self::TRACTOR => 'Trator',
            self::UTILITY => 'Utilitário',
            self::OTHER => 'Outros',
        };
    }

}
