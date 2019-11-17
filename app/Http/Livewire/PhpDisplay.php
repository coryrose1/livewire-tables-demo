<?php

namespace App\Http\Livewire;

use Livewire\Component;
use ReflectionClass;

class PhpDisplay extends Component
{
    public $paginate = true;
    public $hasSearch = true;

    protected $listeners = [
        'paginateChanged' => 'setPaginate',
        'searchableChanged' => 'setSearchable'
    ];


    public function render()
    {
        return view('livewire.php-display');
    }

    // DEMO METHODS
    public function setPaginate()
    {
        $this->paginate = !$this->paginate;
    }

    public function setSearchable()
    {
        $this->hasSearch = !$this->hasSearch;
    }
}
