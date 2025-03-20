<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('elements.button', 'button');
        Blade::component('elements.description', 'description');
        Blade::component('elements.label', 'label');
        Blade::component('elements.nav-link', 'nav-link');
        Blade::component('elements.table-cell', 'table-cell');
        Blade::component('elements.table-row', 'table-row');
        Blade::component('elements.title', 'title');
        Blade::component('modules.dropdown', 'dropdown');
        Blade::component('modules.modal-form', 'modal-form');
        Blade::component('modules.modal-delete', 'modal-delete');
        Blade::component('modules.table', 'table');
        Blade::component('modules.sidebar', 'sidebar');
        Blade::component('layouts.sidebar', 'sidebar-layout');
        Blade::component('layouts.app', 'app-layout');
        Blade::component('layouts.admin-panel', 'admin-panel-layout');
        Blade::component('layouts.dashboard', 'dashboard-layout');
    }
}
