<x-filament-panels::page>

    {{-- <h1 class="text-lg font-bold tracking-tight md:text-3xl filament-header-heading"> Geral </h1> --}}

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">

        <a href="{{ route('filament.admin.resources.employee-profiles.index') }}" class="fi-ta-ctn flex flex-col justify-center items-center gap-2 p-4 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">
            <div class="p-2">

                <x-icon name="heroicon-o-users" class="w-16 h-16" style="color: black"/>

            </div>

            <h1 class="font-bold text-lg">Perfis de Colaboradores</h1>
            <p class="text-sm text-gray-400">Perfis de permissões dos colaboradores</p>
        </a>

        <a href="{{ route('filament.admin.resources.company-groups.index') }}" class="fi-ta-ctn flex flex-col justify-center items-center gap-2 p-4 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">
            <div class="p-2">

                <x-icon name="heroicon-o-rectangle-stack" class="w-16 h-16" style="color: black"/>

            </div>

            <h1 class="font-bold text-lg">Grupos de Empresas</h1>
            <p class="text-sm text-gray-400">Grupos de empresas cadastradas no sistema</p>
        </a>

        <a href="{{ route('filament.admin.resources.mechanical-items.index') }}" class="fi-ta-ctn flex flex-col justify-center items-center gap-2 p-4 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">
            <div class="p-2">

                <x-icon name="heroicon-o-wrench-screwdriver" class="w-16 h-16" style="color: black"/>

            </div>

            <h1 class="font-bold text-lg">Peças e Serviços</h1>
            <p class="text-sm text-gray-400">Gestão das peças e serviços disponíveis no sistema</p>
        </a>

        <a href="{{ route('filament.admin.resources.api-keys.index') }}" class="fi-ta-ctn flex flex-col justify-center items-center gap-2 p-4 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">
            <div class="p-2">

                <x-icon name="heroicon-o-arrows-right-left" class="w-16 h-16" style="color: black"/>

            </div>

            <h1 class="font-bold text-lg">Integrações com API</h1>
            <p class="text-sm text-gray-400">Gestão de tokens de integração de API do sistema</p>
        </a>

        <a href="{{ route('filament.admin.pages.company-profile') }}" class="fi-ta-ctn flex flex-col justify-center items-center gap-2 p-4 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">
            <div class="p-2">

                <x-icon name="heroicon-o-building-storefront" class="w-16 h-16" style="color: black"/>

            </div>

            <h1 class="font-bold text-lg">Minha Empresa</h1>
            <p class="text-sm text-gray-400">Informações do cadastro de sua empresa</p>
        </a>

        {{-- <a href="{{ route($item->route) }}" class="fi-ta-ctn flex flex-col justify-center items-center gap-2 p-4 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">
            <div class="p-2">
                @if($item->color)
                    <x-icon name="{{ $item->icon }}" class="w-16 h-16" style="color: {{ $item->color }}"/>
                @else
                    <x-icon name="{{ $item->icon }}" class="w-16 h-16"/>
                @endif
            </div>

            <h1 class="font-bold text-lg">{{ str($item->label)->contains(['.','::']) ? trans($item->label) : $item->label }}</h1>
            <p class="text-sm text-gray-400">{{ str($item->description)->contains(['.','::']) ? trans($item->description) : $item->description}}</p>
        </a> --}}

    </div>

</x-filament-panels::page>
