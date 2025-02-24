<?php

namespace AccreditedResource\Filament\Admin\Resources\AccreditedResource\Tables;

use Filament\Tables\Table;
use Campidellis\FilamentHelpers\Contracts\TableBuilder;
use Filament\Support\Enums\Alignment;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

class AccreditedTable extends TableBuilder
{

    public function table(Table $table): Table
    {

        return $table
            ->heading(self::getTableHeader())
            ->description('Listagem de todas as credenciadas cadastradas no sistema')
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
            ->emptyStateDescription('Nenhuma credenciada foi cadastrada')
            ->striped();

    }

    public static function columns(): array
    {

        return [

            TextColumn::make('id')
                ->label('ID')
                ->searchable(),

            TextColumn::make('business_name')
                ->label('Razão social')
                ->limit(30)
                ->tooltip(fn($record) => $record->business_name)
                ->sortable()
                ->searchable(),

            TextColumn::make('cnpj')
                ->label('CNPJ')
                ->default('-')
                ->searchable(),

            TextColumn::make('email')
                ->label('E-mail')
                ->default('-')
                ->searchable(),

            TextColumn::make('phone')
                ->label('Telefone')
                ->default('-')
                ->searchable(),

            TextColumn::make('active')
                ->label('Status')
                ->formatStateUsing(fn (string $state): string => $state == 0 ? 'Inativa' : 'Ativa')
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

        $content = '<div class="flex-header">' . $icon . 'Credenciadas</div>';

        return new HtmlString($content);

    }

}
