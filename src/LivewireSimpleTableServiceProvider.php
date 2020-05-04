<?php

namespace ViitorTest\LivewireSimpleTable;

use Illuminate\Support\ServiceProvider;

class LivewireSimpleTableServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/../resources/views/','livewire-simple-table');
    }
}
