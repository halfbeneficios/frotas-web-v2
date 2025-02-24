<x-filament-panels::page class="fi-dashboard-page">

    <div class="relative bg-indigo-200 p-4 sm:p-6 rounded-sm overflow-hidden mb-8">
        <div class="relative">
            <h1 class="text-2xl md:text-3xl text-slate-800 font-bold mb-1">Bem vindo, ao sistema Half 👋</h1>
            <p>Gerencie seus orçamentos e manutenções de forma simples e eficiente.</p>
        </div>
    </div>

    @if (method_exists($this, 'filtersForm'))
        {{ $this->filtersForm }}
    @endif

    <x-filament-widgets::widgets
        :columns="$this->getColumns()"
        :data="
            [
                ...(property_exists($this, 'filters') ? ['filters' => $this->filters] : []),
                ...$this->getWidgetData(),
            ]
        "
        :widgets="$this->getVisibleWidgets()"
    />

</x-filament-panels::page>
