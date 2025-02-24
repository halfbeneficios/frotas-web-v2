<?php

namespace App\Providers\Filament;

use Agencetwogether\HooksHelper\HooksHelperPlugin;
use App\Filament\Admin\Pages\Login;
use App\Services\Layout\Avatar;
use App\Services\Layout\LoginImage;
use App\Services\Layout\PanelSize;
use EightyNine\FilamentPasswordExpiry\PasswordExpiryPlugin;
use Filament\Enums\ThemeMode;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Guava\FilamentKnowledgeBase\KnowledgeBasePlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use pxlrbt\FilamentSpotlight\SpotlightPlugin;
use Swis\Filament\Backgrounds\FilamentBackgroundsPlugin;

class AdminPanelProvider extends PanelProvider
{

    public function panel(Panel $panel): Panel
    {

        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login(Login::class)
            ->passwordReset()
            ->colors([
                'primary' => Color::Blue,
            ])
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->discoverResources(in: app_path('Filament/Admin/Resources'), for: 'App\\Filament\\Admin\\Resources')
            ->discoverPages(in: app_path('Filament/Admin/Pages'), for: 'App\\Filament\\Admin\\Pages')
            ->discoverWidgets(in: app_path('Filament/Admin/Widgets'), for: 'App\\Filament\\Admin\\Widgets')
            ->pages([])
            ->widgets([])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([

                FilamentBackgroundsPlugin::make()
                    ->showAttribution(false)
                    ->imageProvider(
                        LoginImage::make()
                    ),

                SpotlightPlugin::make(),

                HooksHelperPlugin::make(),

                PasswordExpiryPlugin::make(),

                KnowledgeBasePlugin::make()
                    ->disableKnowledgeBasePanelButton()
                    ->slideOverPreviews()
                    ->modalTitleBreadcrumbs(false)
                    ->openDocumentationInNewTab(false),

            ])
            ->brandLogo(asset('images/layout/logo-admin-panel.png'))
            ->darkModeBrandLogo(asset('images/layout/logo-admin-panel-dark.png'))
            ->brandLogoHeight('2.8rem')
            ->sidebarCollapsibleOnDesktop()
            ->maxContentWidth(PanelSize::default())
            ->defaultThemeMode(ThemeMode::Light)
            ->darkMode(false)
            ->databaseNotifications()
            ->defaultAvatarProvider(Avatar::class)
            ->unsavedChangesAlerts(false)
            ->databaseNotificationsPolling('30s')
            ->navigationGroups([
                'Administrativo',
                'Configurações',
            ]);

    }

}
