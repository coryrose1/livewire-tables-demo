<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livewire Tables Demo</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireAssets
</head>
<body class="bg-gray-200 h-full">
<script src="{{ mix('js/app.js') }}"></script>
<div class="py-6">
    <h1 class="text-4xl mb-12 font-semibold">Livewire Tables Demo</h1>
    <div class="md:flex mb-12">
        <div class="md:w-1/2 px-2 md:px-6">
            <h4 class="text-xl mb-4 font-semibold">Options</h4>
            @livewire('table-options')
        </div>
        <div class="md:w-1/2 px-2 md:px-6">
            <h4 class="text-xl mb-4 font-semibold">Rendered Table</h4>
            <div class="bg-white rounded py-6 px-4">
                @livewire('tables.users-table')
            </div>
        </div>
    </div>
    <div class="md:flex">
        <div class="md:w-1/2 px-2 md:px-6">
            <h4 class="text-xl mb-4 font-semibold">Table Class Component</h4>
            @livewire('php-display')
        </div>
        <div class="md:w-1/2 px-2 md:px-6">
            <h4 class="text-xl mb-4 font-semibold">Generated View Component</h4>
            @livewire('html-display')
        </div>
    </div>
</div>
</body>
</html>
