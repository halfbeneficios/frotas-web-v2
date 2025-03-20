<?php

namespace App\Filament\Accredited\Resources;

use App\Filament\Accredited\Resources\ReportResource\Pages;
use App\Models\Report;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use ReportResource\Filament\Accredited\Resources\ReportResource\Tables\ReportTable;

class ReportResource extends Resource
{

    protected static ?string $model = Report::class;

    protected static ?string $modelLabel = 'Relatórios';

    protected static ?string $navigationLabel = 'Relatórios';

    protected static ?string $navigationGroup = 'Configurações';

    protected static ?string $navigationIcon = 'heroicon-o-printer';

    protected static ?int $navigationSort = 2;

    public static function table(Table $table): Table
    {
        return ReportTable::make($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReports::route('/'),
        ];
    }

}
