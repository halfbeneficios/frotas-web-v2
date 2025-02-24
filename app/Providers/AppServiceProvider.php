<?php

namespace App\Providers;

use Filament\Support\Facades\FilamentView;
use Guava\FilamentKnowledgeBase\Filament\Panels\KnowledgeBasePanel;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Colors\Color;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {

        KnowledgeBasePanel::configureUsing(
            fn(KnowledgeBasePanel $panel) => $panel
                ->colors([
                    'primary' => Color::Blue,
                ])
                ->viteTheme('resources/css/filament/admin/theme-docs.css')
        );

        FilamentView::registerRenderHook(
            'panels::sidebar.nav.end',
            fn (): string => Blade::render('@livewire(\'layout.chat\')'),
        );

        FilamentView::registerRenderHook(
            'panels::user-menu.before',
            fn (): string => Blade::render('@livewire(\'layout.help-button\')'),
        );

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

}
