<?php

namespace Viitortest\LivewireSimpleTable;

use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

abstract class TableComponent extends Component
{
     /**
     * @return mixed
     */
    abstract public function query(): Builder;

    /**
     * @return mixed
     */
    abstract public function columns(): array;

    /**
     * @return string
     */
    public function view(): string
    {
        return 'livewire-simple-table-view::table-component';
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render(): View
    {
        return view($this->view(),[
            'columns' => $this->columns(),
            'models' => $this->models()->get()
        ]);
    }

     /**
     * @return Builder
     */
    public function models(): Builder
    {
        return $models = $this->query();
    }
}
