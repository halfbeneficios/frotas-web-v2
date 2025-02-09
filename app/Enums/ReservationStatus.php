<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ReservationStatus: string implements HasLabel
{

    case PENDING = 'Pendente';

    case APPROVED = 'Aprovada';

    case REJECTED = 'Recusada';
    
    case CANCELED = 'Cancelada';

    public function getLabel(): string
    {
        return match ($this) {
            self::PENDING => 'Pendente',
            self::APPROVED => 'Aprovada',
            self::REJECTED => 'Recusada',
            self::CANCELED => 'Cancelada',
        };
    }

}

