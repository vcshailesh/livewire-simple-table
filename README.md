# Livewire simple table component

**Livewire simple table component** is display dynamically table with header using livewire component.

## Installation

1. Install the package via composer:
    ```shell
    composer require viitortest/livewire-simple-table
    ```

## Usage

## Generate table component using command
You will generate dynamically table component using below command:

```
php artisan make:table UsersTable
```

You will assign model using ```--model=User``` argument.

## Create table component
To create a table component you can start with the below stub:

```
<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Viitortest\LivewireSimpleTable\TableComponent;
use Viitortest\LivewireSimpleTable\Traits\Column;

class UsersComponent extends TableComponent
{

    public function query() : Builder
    {
        return User::query();
    }

    public function columns() : array
    {
        return [
            Column::make('ID'),
            Column::make('Name','name'),
        ];
    }
}
```
## Rendering the Table
You can use below code for render component into different version of laravel

Laravel 6.x:
```
@livewire('user-table')
```

Laravel 7.x:
```
<livewire:user-table/>
```

## Defining Columns
You wil dynamically display table component columns using below code:

```
Column::make('Display Name', 'table_column_name')
```


## License

The package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).