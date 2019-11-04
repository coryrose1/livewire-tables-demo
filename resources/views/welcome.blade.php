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
<div class="max-w-6xl mx-auto py-6">
    <h1 class="text-2xl mb-4 font-semibold">Livewire Tables Demo</h1>
    <div class="flex justify-center">
    <div class="bg-white rounded py-6 px-4">
        @livewire('tables.users-table')
    </div>
    </div>
</div>
</body>
</html>
