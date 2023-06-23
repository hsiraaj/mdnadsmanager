<x-layouts.base :title="$title ?? null">

    <div id="page-container" x-data="{ mobileSidebarOpen: false }"
        class="relative mx-auto flex min-h-screen min-w-[320px] flex-col lg:ml-96">

        <x-layouts.sidebar.primary />

        <x-layouts.header.header />

        {{ $slot }}

        <x-layouts.footer />

    </div>

</x-layouts.base>
