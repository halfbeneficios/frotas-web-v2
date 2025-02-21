<?php

namespace CostCenterResource\Filament\Company\Resources\CostCenterResource\Tables;

use Filament\Tables\Table;
use Campidellis\FilamentHelpers\Contracts\TableBuilder;
use Filament\Support\Enums\Alignment;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

class CostCenterTable extends TableBuilder
{

    public function table(Table $table): Table
    {

        return $table
            ->heading(self::getTableHeader())
            ->description('Listagem de todos os centros de custo cadastrados no sistema')
            ->headerActions([])
            ->columns(self::columns())
            ->filters([])
            ->actions([

                ActionGroup::make([

                    EditAction::make(),

                ])
                ->tooltip('Ações')
                ->icon('heroicon-m-ellipsis-horizontal'),

            ])
            ->defaultSort(fn ($query) => $query->orderBy('active', 'desc'))
            ->emptyStateDescription('Nenhum centro de custo foi cadastrado')
            ->striped();

    }

    public static function columns(): array
    {

        return [

            TextColumn::make('name')
                ->label('Nome do Centro')
                ->searchable(),

            TextColumn::make('description')
                ->label('Descrição')
                ->default('-')
                ->limit(25)
                ->searchable(),

            TextColumn::make('active')
                ->label('Status')
                ->formatStateUsing(fn (string $state): string => $state == 0 ? 'Inativo' : 'Ativo')
                ->icon(fn (string $state): string => match ($state) {
                    '1' => 'heroicon-o-check-circle',
                    '0' => 'heroicon-o-x-circle',
                })
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    '1' => 'success',
                    '0' => 'danger',
                })
                ->alignment(Alignment::Center),

        ];

    }

    public static function getTableHeader(): Htmlable
    {

        $icon = "<img src='" . asset('images/icons/categories.svg') . "' width='30' height='30' alt='' />";

        $content = '<div class="flex-header">' . $icon . 'Centros de Custo</div>';

        return new HtmlString($content);

    }

}
