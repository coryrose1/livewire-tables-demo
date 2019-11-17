<div>
    @if ($hasSearch)
    <div>
        <div style="position: relative; display: inline-block;">
        <input class="border" type="text" wire:model="search" />
            @if ($search)
        <button wire:click="clearSearch" style="position: absolute; right: 5px;">&#10005;</button>
                @endif
        </div>
    </div>
    @endif
    <table>
        <thead>
        <tr>
			<th wire:click="$emit('sortColumn', 0)">ID</th>
			<th wire:click="$emit('sortColumn', 1)">Name</th>
			<th wire:click="$emit('sortColumn', 2)">City</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($rowData as $row)
            <tr>
				<td>{{ $row->id }}</td>
				<td>{{ $row->name }}</td>
				<td>{{ $row->address->city }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if ($paginate)
    <div class="flex justify-end">
        {{ $rowData->links() }}
    </div>
    @endif
</div>
