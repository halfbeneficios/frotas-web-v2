<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum VehicleSituation: string implements HasLabel
{

    case RENTED = 'Alugado';
    
    case LOANED = 'Emprestado';

    case LEASING = 'Leasing';

    case OWNED = 'Próprio';

    case TEMPORARY = 'Temporário';

    case GROUPED = 'Agrupado';

    public function getLabel(): string
    {
        return match ($this) {
            self::RENTED => 'Alugado',
            self::LOANED => 'Emprestado',
            self::LEASING => 'Leasing',
            self::OWNED => 'Próprio',
            self::TEMPORARY => 'Temporário',
            self::GROUPED => 'Agrupado',
        };
    }

}

