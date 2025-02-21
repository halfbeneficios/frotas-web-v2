<?php

namespace App\Providers;

use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {

        FilamentView::registerRenderHook(
            'panels::sidebar.nav.end',
            fn (): string => Blade::render('@livewire(\'layout.chat\')'),
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
