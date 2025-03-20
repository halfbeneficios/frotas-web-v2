<?php

namespace ReportResource\Filament\Admin\Resources\ReportResource\Forms;

use Filament\Forms\Form;
use Campidellis\FilamentHelpers\Contracts\FormBuilder;

class ReportForm extends FormBuilder
{
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

}
