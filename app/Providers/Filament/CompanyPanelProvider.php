<?php

namespace App\Providers\Filament;

use Agencetwogether\HooksHelper\HooksHelperPlugin;
use App\Filament\Company\Pages\Login;
use App\Services\Layout\Avatar;
use App\Services\Layout\LoginImage;
use App\Services\Layout\PanelSize;
use DiogoGPinto\AuthUIEnhancer\AuthUIEnhancerPlugin;
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

class CompanyPanelProvider extends PanelProvider
{

    public function panel(Panel $panel): Panel
    {

        return $panel
            ->id('company')
            ->path('company')
            ->login(Login::class)
            ->passwordReset()
            ->colors([
                'primary' => Color::Blue,
            ])
            ->viteTheme('resources/css/filament/company/theme.css')
            ->discoverResources(in: app_path('Filament/Company/Resources'), for: 'App\\Filament\\Company\\Resources')
            ->discoverPages(in: app_path('Filament/Company/Pages'), for: 'App\\Filament\\Company\\Pages')
            ->discoverWidgets(in: app_path('Filament/Company/Widgets'), for: 'App\\Filament\\Company\\Widgets')
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

                AuthUIEnhancerPlugin::make()
                    ->formPanelWidth('37%')
                    ->formPanelBackgroundColor(Color::hex('#f4f4f5'))
                    ->formPanelPosition('left')
                    ->showEmptyPanelOnMobile(false)
                    ->emptyPanelBackgroundImageOpacity('70%')
                    ->emptyPanelBackgroundImageUrl('https://i.ibb.co/GfY3h1ZX/banner-login.png'),

                PasswordExpiryPlugin::make(),

                KnowledgeBasePlugin::make()
                    ->disableKnowledgeBasePanelButton()
                    ->slideOverPreviews()
                    ->modalTitleBreadcrumbs(false)
                    ->openDocumentationInNewTab(false),

            ])
            ->brandLogo(asset('images/layout/logo-company-panel.png'))
            ->darkModeBrandLogo(asset('images/layout/logo-company-panel-dark.png'))
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
                'Gestão de Frota',
                'Gestão do Sistema',
                'Operacional',
                'Configurações',
            ]);

    }

}
