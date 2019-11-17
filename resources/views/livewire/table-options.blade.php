<div>
    <div class="bg-white py-6 px-2 rounded">
        <div class="sm:flex">
            <div class="flex-1 px-3">
                <p>Welcome to the Livewire Tables demo page. Use the available options to control the table.</p>
                <p class="mt-3">The <strong>UsersTable.php</strong> class preview shows you how to configure the PHP class which would
                    generate the view <strong>users-table.blade.php</strong> after running:</p>
                <p class="mt-3"><code>php artisan livewire-tables:scaffold UsersTable</code></p>
            </div>
            <div class="w-64">
                <div>
                    <input id="paginated" type="checkbox" @if ($paginate)checked="checked" @endif wire:model="paginate" wire:click="$emit('paginateChanged')">
                    <label for="paginated">Paginated</label>
                </div>
                <div>
                    <input id="searchable" type="checkbox" @if ($hasSearch)checked="checked" @endif wire:model="hasSearch" wire:click="$emit('searchableChanged')">
                    <label for="searchable">Searchable</label>
                </div>
            </div>
        </div>
    </div>
</div>
