<?php

namespace ViitorTest\LivewireSimpleTable;

use Illuminate\Support\ServiceProvider;
use Viitortest\LivewireSimpleTable\Commands\MakeTableComponent;

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
        if ($this->app->runningInConsole()) {
            $this->commands([MakeTableComponent::class]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views/','livewire-simple-table-view');
    }
}
