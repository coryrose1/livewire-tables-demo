<div>
    <div>
        <input id="paginated" type="checkbox" @if ($paginate)checked="checked" @endif wire:model="paginate" wire:click="$emit('paginateChanged')">
        <label for="paginated">Paginated</label>
    </div>
    <div>
        <input id="searchable" type="checkbox" @if ($hasSearch)checked="checked" @endif>
        <label for="searchable">Searchable</label>
    </div>
</div>
