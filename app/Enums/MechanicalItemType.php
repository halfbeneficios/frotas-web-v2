<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum MechanicalItemType: string implements HasLabel
{

    case PRODUCT = 'product';

    case SERVICE = 'service';

    public function getLabel(): string
    {
        return match ($this) {
            self::PRODUCT => 'Produto',
            self::SERVICE => 'Serviço',
        };
    }

}
