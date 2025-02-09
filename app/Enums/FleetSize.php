<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum FleetSize: string implements HasLabel
{

    case SMALL = 'small';

    case MEDIUM = 'medium';

    case LARGE = 'large';

    public function getLabel(): string
    {
        return match ($this) {
            self::SMALL => 'Pequena',
            self::MEDIUM => 'Média',
            self::LARGE => 'Grande',
        };
    }

}
