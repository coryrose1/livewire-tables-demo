<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TableOptions extends Component
{
    public $paginate = true;
    public $pagination = 10;
    public $hasSearch = true;

    public function render()
    {
        return view('livewire.table-options');
    }

}
