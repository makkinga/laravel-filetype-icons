<?php

namespace Makkinga\FiletypeIcons;

use Illuminate\Support\ServiceProvider;

class FiletypeIconsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('filetype-icon', FiletypeIconsComponent::class);
    }
}
