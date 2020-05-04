# Livewire Simple Table Component

**Livewire Simple Table Component** is display dynamically table with header using livewire simple component.

## Installation

1. Install the package via composer:
    ```shell
    composer require viitortest/livewire-simple-table
    ```

## Usage

## Create Table Component
To create a table component you can start with the below stub:

```
<?php

namespace App\Http\Livewire;

use App\ContactUs;
use Illuminate\Database\Eloquent\Builder;
use Viitortest\LivewireSimpleTable\TableComponent;
use Viitortest\LivewireSimpleTable\Traits\Column;

class SimpleTableComponent extends TableComponent
{

    public function query() : Builder
    {
        return ContactUs::query();
    }

    public function columns() : array
    {
        return [
            Column::make('ID'),
            Column::make('First name'),
            Column::make('Last name'),
            Column::make('E-mail', 'email'),
            Column::make('Message', 'message')
        ];
    }
}
```
## Rendering the Table
You can use below code for render component into different version of laravel

Laravel 6.x:
```
@livewire('simple-table-component')
```

Laravel 7.x:
```
<livewire:simple-table-component/>
```

## Defining Columns
You wil dynamically display table component columns using below code:

```
Column::make('Display Name', 'table_column_name')
```