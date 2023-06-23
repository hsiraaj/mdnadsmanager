<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-DNS-Prefetch-Control" content="on">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="base-url" content="{{ config('app.url') }}">
    <meta name="dashboard-url" content="{{ config('app.url') . '/dashboard' }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }}</title>

    {{-- @livewireStyles --}}
    @vite('resources/css/app.css')
    @stack('styles')
    {{-- @livewireScripts --}}
</head>

<body class="antialiased bg-zinc-100 scroll-smooth">

    {{ $slot }}

    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
