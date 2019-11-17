<?php

namespace App\Http\Livewire\Tables;

use Coryrose\LivewireTables\LivewireModelTable;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;
use App\User;

class UsersTable extends LivewireModelTable
{
    use WithPagination;

    public $paginate = true;
    public $pagination = 10;
    public $hasSearch = true;

    protected $listeners = [
        'sortColumn' => 'setSort',
        'paginateChanged' => 'setPaginate',
        'searchableChanged' => 'setSearchable'
    ];

    public $fields = [
        [
            'title' => 'ID',
            'name' => 'id',
            'header_class' => '',
            'cell_class' => '',
            'sortable' => true,
            'searchable' => true,
        ],

        [
            'title' => 'Name',
            'name' => 'name',
            'header_class' => '',
            'cell_class' => '',
            'sortable' => true,
            'searchable' => true,
        ],
        [
            'title' => 'City',
            'name' => 'address.city',
            'header_class' => '',
            'cell_class' => '',
            'sortable' => true,
            'searchable' => true,
        ],
    ];

    public function render()
    {
        return view('livewire.tables.users-table', [
            'fields' => $this->fields,
            'rowData' => $this->query(),
        ]);
    }

    public function model()
    {
        return User::class;
    }

    public function with()
    {
        return ['address'];
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
