<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class CompanyProfile extends Page
{

    protected ?string $heading = 'Minha Empresa';

    protected static ?string $modelLabel = 'Minha Empresa';

    protected static ?string $title = 'Minha Empresa';

    protected static string $view = 'filament.admin.pages.company-profile';

    protected static bool $shouldRegisterNavigation = false;

}
