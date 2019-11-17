<div>
    <div class="rounded-lg bg-gray-800 mb-12 px-6">
        <pre class="scrollbar-none">
            <code class="scrolling-touch language-php">
<span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Http<span
                        class="token punctuation">\</span>Livewire<span
                        class="token punctuation">\</span>Tables</span><span class="token punctuation">;</span>

<span class="token keyword">use</span> <span class="token package">Coryrose<span class="token punctuation">\</span>LivewireTables<span
                        class="token punctuation">\</span>LivewireModelTable</span><span
                    class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">Livewire<span class="token punctuation">\</span>WithPagination</span><span
                    class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">App<span
                        class="token punctuation">\</span>User</span><span class="token punctuation">;</span>

<span class="token keyword">class</span> <span class="token class-name">UsersTable</span> <span class="token keyword">extends</span> <span
                    class="token class-name">LivewireModelTable</span>
<span class="token punctuation">{</span>
    <span class="token keyword">use</span> <span class="token package">WithPagination</span><span
                    class="token punctuation">;</span>

    <span class="token keyword">public</span> <span class="token variable">$paginate</span> <span
                    class="token operator">=</span> <span class="token boolean constant">{{ $paginate ? 'true' : 'false' }}</span><span
                    class="token punctuation">;</span>
    <span class="token keyword">public</span> <span class="token variable">$pagination</span> <span
                    class="token operator">=</span> <span class="token number">10</span><span class="token punctuation">;</span>
    <span class="token keyword">public</span> <span class="token variable">$hasSearch</span> <span
                    class="token operator">=</span> <span class="token boolean constant">{{ $hasSearch ? 'true' : 'false' }}</span><span
                    class="token punctuation">;</span>

    <span class="token keyword">public</span> <span class="token variable">$fields</span> <span
                    class="token operator">=</span> <span class="token punctuation">[</span>
        <span class="token punctuation">[</span>
            <span class="token single-quoted-string string">'title'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span class="token single-quoted-string string">'ID'</span><span
                    class="token punctuation">,</span>
            <span class="token single-quoted-string string">'name'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span class="token single-quoted-string string">'id'</span><span
                    class="token punctuation">,</span>
            <span class="token single-quoted-string string">'header_class'</span> <span
                    class="token operator">=</span><span class="token operator">&gt;</span> <span
                    class="token single-quoted-string string">''</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'cell_class'</span> <span
                    class="token operator">=</span><span class="token operator">&gt;</span> <span
                    class="token single-quoted-string string">''</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'sortable'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span class="token boolean constant">true</span><span
                    class="token punctuation">,</span>
            <span class="token single-quoted-string string">'searchable'</span> <span
                    class="token operator">=</span><span class="token operator">&gt;</span> <span
                    class="token boolean constant">true</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token punctuation">[</span>
            <span class="token single-quoted-string string">'title'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span
                    class="token single-quoted-string string">'Name'</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'name'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span
                    class="token single-quoted-string string">'name'</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'header_class'</span> <span
                    class="token operator">=</span><span class="token operator">&gt;</span> <span
                    class="token single-quoted-string string">''</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'cell_class'</span> <span
                    class="token operator">=</span><span class="token operator">&gt;</span> <span
                    class="token single-quoted-string string">''</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'sortable'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span class="token boolean constant">true</span><span
                    class="token punctuation">,</span>
            <span class="token single-quoted-string string">'searchable'</span> <span
                    class="token operator">=</span><span class="token operator">&gt;</span> <span
                    class="token boolean constant">true</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
        <span class="token punctuation">[</span>
            <span class="token single-quoted-string string">'title'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span
                    class="token single-quoted-string string">'City'</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'name'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span
                    class="token single-quoted-string string">'address.city'</span><span
                    class="token punctuation">,</span>
            <span class="token single-quoted-string string">'header_class'</span> <span
                    class="token operator">=</span><span class="token operator">&gt;</span> <span
                    class="token single-quoted-string string">''</span><span class="token punctuation">,</span>
            <span class="token single-quoted-string string">'cell_class'</span> <span
                    class="token operator">=</span><span class="token operator">&gt;</span> <span
                    class="token single-quoted-string string">''</span><span
                    class="token punctuation">,</span>
            <span class="token single-quoted-string string">'sortable'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span class="token boolean constant">true</span><span
                    class="token punctuation">,</span>
            <span class="token single-quoted-string string">'searchable'</span> <span
                    class="token operator">=</span><span class="token operator">&gt;</span> <span
                    class="token boolean constant">true</span><span class="token punctuation">,</span>
        <span class="token punctuation">]</span><span class="token punctuation">,</span>
    <span class="token punctuation">]</span><span class="token punctuation">;</span>

    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">render</span><span
                    class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token function">view</span><span
                    class="token punctuation">(</span><span class="token single-quoted-string string">'livewire.tables.users-table'</span><span
                    class="token punctuation">,</span> <span class="token punctuation">[</span>
            <span class="token single-quoted-string string">'fields'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span class="token variable">$this</span><span
                    class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">fields</span><span
                    class="token punctuation">,</span>
            <span class="token single-quoted-string string">'rowData'</span> <span class="token operator">=</span><span
                    class="token operator">&gt;</span> <span class="token variable">$this</span><span
                    class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">query</span><span
                    class="token punctuation">(</span><span class="token punctuation">)</span><span
                    class="token punctuation">,</span>
        <span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">model</span><span
                    class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> User<span class="token punctuation">:</span><span
                    class="token punctuation">:</span><span class="token keyword">class</span><span
                    class="token punctuation">;</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function">with</span><span
                    class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token punctuation">[</span><span
                    class="token single-quoted-string string">'address'</span><span
                    class="token punctuation">]</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
            </code>
        </pre>
    </div>
</div>
