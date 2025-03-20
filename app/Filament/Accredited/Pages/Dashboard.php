<?php

namespace App\Filament\Accredited\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar-square';

    protected static ?string $title = '';

    protected static ?string $navigationLabel = 'Dashboard';

    protected static string $view = 'filament.accredited.pages.dashboard';

    public function getWidgets(): array
    {
        return [

            //AccreditedMap::class,

        ];
    }

    public function getVisibleWidgets(): array
    {
        return $this->filterVisibleWidgets($this->getWidgets());
    }

    public function getColumns(): int | string | array
    {
        return 2;
    }

}
