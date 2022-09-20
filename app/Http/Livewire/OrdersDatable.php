<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class OrdersDatable extends LivewireDatatable
{
    public $model = Order::class;

    public function columns()
    {
        return [
            Column::name('reference'),
            Column::name('customer.name'),
            Column::name('customer.lastname'),
            Column::name('Status'),
        ];
    }
}