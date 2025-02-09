<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum FuelType: string implements HasLabel
{

    case GASOLINE = 'Gasolina';

    case ALCOHOL = 'Álcool';

    case DIESEL = 'Diesel';

    case FLEX = 'Flex';

    case NATURAL_GAS = 'Gás Natural';

    case ELECTRIC = 'Elétrico';

    case BIODIESEL = 'Biodiesel';

    case ETHANOL = 'Etanol';

    public function getLabel(): string
    {
        return match ($this) {
            self::GASOLINE => 'Gasolina',
            self::ALCOHOL => 'Álcool',
            self::DIESEL => 'Diesel',
            self::FLEX => 'Flex',
            self::NATURAL_GAS => 'Gás Natural',
            self::ELECTRIC => 'Elétrico',
            self::BIODIESEL => 'Biodiesel',
            self::ETHANOL => 'Etanol',
        };
    }

}
