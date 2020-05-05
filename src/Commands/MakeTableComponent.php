<?php

namespace Viitortest\LivewireSimpleTable\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeTableComponent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:table {name} {--model=Model} {--path=Path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a new Laravel Livewire table component.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $stub = File::get(__DIR__ . '/../../resources/stubs/table-component.stub');
        $stub = str_replace('DummyComponent', $this->argument('name'), $stub);
        $stub = str_replace('DummyModel', $this->option('model'), $stub);
        $path = app_path('Http/Livewire/' . $this->argument('name') . '.php');
        
        $blade_stub = File::get(__DIR__ . '/../../resources/stubs/table-view.stub');
        $blade_path = resource_path('views/livewire/' . $this->argument('name') . '.blade.php');

        File::ensureDirectoryExists(app_path('Http/Livewire'));

        if (!File::exists($path) || $this->confirm($this->argument('name') . ' already exists. Overwrite it?')) {
            File::put($path, $stub);
            $this->info($this->argument('name') . ' component file was made!');
            
        }

        if (!File::exists($blade_path) || $this->confirm($this->argument('name') . ' views already exists. Overwrite it?')) {
            File::put($blade_path, $blade_stub);
            $this->info($this->argument('name') . ' view file was made!');
        }
    }
}
