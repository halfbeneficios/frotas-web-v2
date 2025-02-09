<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum InfractionGravity: string implements HasLabel
{

    case LIGHT = 'Leve';

    case MEDIUM = 'Média';

    case SERIOUS = 'Grave';
    
    case VERY_SERIOUS = 'Gravíssima';

    public function getLabel(): string
    {
        return match ($this) {
            self::LIGHT => 'Leve',
            self::MEDIUM => 'Média',
            self::SERIOUS => 'Grave',
            self::VERY_SERIOUS => 'Gravíssima',
        };
    }

}
