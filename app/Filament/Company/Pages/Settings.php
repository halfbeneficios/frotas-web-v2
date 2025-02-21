<?php

namespace App\Filament\Company\Pages;

use Filament\Pages\Page;

class Settings extends Page
{

    protected static ?string $title = 'Configurações';

    protected static ?string $navigationLabel = 'Configurações';

    public static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Configurações';

    protected static string $view = 'filament.company.pages.settings';

    protected static ?int $navigationSort = 1;

}
