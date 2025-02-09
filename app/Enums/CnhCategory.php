<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum CnhCategory: string implements HasLabel
{

    case A = 'A';

    case B = 'B';

    case C = 'C';

    case D = 'D';

    case E = 'E';

    case AB = 'AB';

    case AC = 'AC';

    case AD = 'AD';

    case AE = 'AE';

    public function getLabel(): string
    {
        return match ($this) {
            self::A => 'A',
            self::B => 'B',
            self::C => 'C',
            self::D => 'D',
            self::E => 'E',
            self::AB => 'AB',
            self::AC => 'AC',
            self::AD => 'AD',
            self::AE => 'AE',
        };
    }

}
