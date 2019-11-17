<div>
    <div class="rounded-lg bg-gray-800 mb-12 px-6">
        <pre class="scrollbar-none">
            <code class="scrolling-touch language-html">@verbatim
&lt;div>
    @if ($hasSearch)
    &lt;div>
        &lt;div style="position: relative; display: inline-block;">
        &lt;input class="border" type="text" wire:model="search" />
        @if ($search)
        &lt;button wire:click="clearSearch" style="position: absolute; right: 5px;">
            &#10005;
        &lt;/button>
        @endif
        &lt;/div>
    &lt;/div>
    @endif
    &lt;table>
        &lt;thead>
        &lt;tr>
			&lt;th wire:click="$emit('sortColumn', 0)">ID&lt;/th>
			&lt;th wire:click="$emit('sortColumn', 1)">Name&lt;/th>
			&lt;th wire:click="$emit('sortColumn', 2)">City&lt;/th>
        &lt;/tr>
        &lt;/thead>
        &lt;tbody>
        @foreach ($rowData as $row)
            &lt;tr>
                &lt;td>{{ $row->id }}&lt;/td>
                &lt;td>{{ $row->name }}&lt;/td>
                &lt;td>{{ $row->address->city }}&lt;/td>
            &lt;/tr>
        @endforeach
        &lt;/tbody>
    &lt;/table>
    @if ($paginate)
        &lt;div class="flex justify-end">
            {{ $rowData->links() }}
        &lt;/div>
    @endif
&lt;/div>
@endverbatim</code>
        </pre>
    </div>
</div>
