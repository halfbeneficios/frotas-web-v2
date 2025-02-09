<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum MechanicalItemGroup: string implements HasLabel
{

    case ACCESSORIES = 'Acessórios';

    case ELECTRICAL = 'Elétrico';

    case EQUIPMENT = 'Equipamentos';

    case BRAKE = 'Freio';

    case BODYWORK = 'Funilaria';

    case ENGINE = 'Motor';

    case PAINT = 'Pintura';

    case PRODUCTS = 'Produtos';

    case SUSPENSION = 'Suspensão';

    case TRANSMISSION = 'Transmissão';

    case TOOLS = 'Ferramentas';

    case GENERAL = 'Geral';

    case WINCH = 'Guincho';

    case TIRES = 'Pneus';

    case CAR_WASH = 'Lava Jato';

    case FILTERS = 'Filtros';

    case LUBRICANT_OIL = 'Óleo Lubrificante';

    case INVESTMENT = 'Investimento/Material Permanente';

    case TRAINING = 'Treinamento';

    case INSURANCE = 'Seguro';

    case AVIONICS = 'Aviônico';
    
    case HYDRAULIC = 'Hidráulico';

    public function getLabel(): string
    {
        return match ($this) {
            self::ACCESSORIES => 'Acessórios',
            self::ELECTRICAL => 'Elétrico',
            self::EQUIPMENT => 'Equipamentos',
            self::BRAKE => 'Freio',
            self::BODYWORK => 'Funilaria',
            self::ENGINE => 'Motor',
            self::PAINT => 'Pintura',
            self::PRODUCTS => 'Produtos',
            self::SUSPENSION => 'Suspensão',
            self::TRANSMISSION => 'Transmissão',
            self::TOOLS => 'Ferramentas',
            self::GENERAL => 'Geral',
            self::WINCH => 'Guincho',
            self::TIRES => 'Pneus',
            self::CAR_WASH => 'Lava Jato',
            self::FILTERS => 'Filtros',
            self::LUBRICANT_OIL => 'Óleo Lubrificante',
            self::INVESTMENT => 'Investimento/Material Permanente',
            self::TRAINING => 'Treinamento',
            self::INSURANCE => 'Seguro',
            self::AVIONICS => 'Aviônico',
            self::HYDRAULIC => 'Hidráulico',
        };
    }

}
