<?php

namespace App\Filament\Company\Pages;

use Filament\Pages\Page;

class FinancialLimits extends Page
{

    protected static ?string $title = 'Limites Financeiros';

    protected static ?string $navigationLabel = 'Limites Financeiros';

    public static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationGroup = 'Gestão do Sistema';

    protected static string $view = 'filament.company.pages.financial-limits';

    protected static ?int $navigationSort = 2;

}
