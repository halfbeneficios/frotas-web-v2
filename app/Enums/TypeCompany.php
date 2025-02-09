<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum TypeCompany: string implements HasLabel
{

    case PUBLIC = 'public';

    case PRIVATE = 'private';

    public function getLabel(): string
    {
        return match ($this) {
            self::PUBLIC => 'Orgão Público',
            self::PRIVATE => 'Empresa Privada',
        };
    }

}
