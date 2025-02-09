<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum TypeAnnouncement: string implements HasLabel
{

    case ADMIN = 'admin';

    case COMPANIES = 'companies';

    case ACCREDITEDS = 'accrediteds';

    case ALL = 'all';

    public function getLabel(): string
    {
        return match ($this) {
            self::ADMIN => 'Administrativo',
            self::COMPANIES => 'Empresas',
            self::ACCREDITEDS => 'Credenciadas',
            self::ALL => 'Todos',
        };
    }

}
