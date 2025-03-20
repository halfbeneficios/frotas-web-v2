<?php

namespace App\Filament\Company\Pages;

use Filament\Pages\Page;

class CompanyProfile extends Page
{

    protected ?string $heading = 'Minha Empresa';

    protected static ?string $modelLabel = 'Minha Empresa';

    protected static ?string $title = 'Minha Empresa';

    protected static string $view = 'filament.company.pages.company-profile';

    protected static bool $shouldRegisterNavigation = false;

}
