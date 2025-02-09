<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum TaxRegime: string implements HasLabel
{

    case SIMPLES_NACIONAL = 'Simples Nacional';

    case LUCRO_PRESUMIDO = 'Lucro Presumido';

    case LUCRO_REAL = 'Lucro Real';

    case MEI = 'MEI';

    public function getLabel(): string
    {
        return match ($this) {
            self::SIMPLES_NACIONAL => 'Simples Nacional',
            self::LUCRO_PRESUMIDO => 'Lucro Presumido',
            self::LUCRO_REAL => 'Lucro Real',
            self::MEI => 'MEI',
        };
    }

}
