<!-- Page Sidebar -->
<div class="fixed z-50 bg-white/70 shadow-sm backdrop-blur-sm lg:hidden w-full h-full translate-x-0"
    x-show="mobileSidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" x-cloak>
</div>
<nav id="page-sidebar"
    class="fixed bottom-0 left-0 top-0 z-50 flex h-full w-[65%] border-r border-zinc-200/75 bg-white transition-transform duration-500 ease-out sm:w-72 lg:translate-x-0 lg:shadow-none"
    x-bind:class="{
        '-translate-x-full': !mobileSidebarOpen,
        'translate-x-0 shadow-lg': mobileSidebarOpen,
    }"
    aria-label="Main Sidebar Navigation" @keydown.window.escape="mobileSidebarOpen = false" x-cloak>

    {{-- <x-layouts.sidebar.mini /> --}}

    <!-- Sidebar Content -->
    <div class="grow overflow-auto">
        <!-- Sidebar Header -->
        <div class="flex items-start justify-between border-b border-dashed border-zinc-200 px-5">
            <!-- Heading -->
            <div class="grow h-20 flex items-center text-xl space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ad-filled" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M19 4h-14a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3 -3v-10a3 3 0 0 0 -3 -3zm-10 4a3 3 0 0 1 2.995 2.824l.005 .176v4a1 1 0 0 1 -1.993 .117l-.007 -.117v-1h-2v1a1 1 0 0 1 -1.993 .117l-.007 -.117v-4a3 3 0 0 1 3 -3zm0 2a1 1 0 0 0 -.993 .883l-.007 .117v1h2v-1a1 1 0 0 0 -1 -1zm8 -2a1 1 0 0 1 .993 .883l.007 .117v6a1 1 0 0 1 -.883 .993l-.117 .007h-1.5a2.5 2.5 0 1 1 .326 -4.979l.174 .029v-2.05a1 1 0 0 1 .883 -.993l.117 -.007zm-1.41 5.008l-.09 -.008a.5 .5 0 0 0 -.09 .992l.09 .008h.5v-.5l-.008 -.09a.5 .5 0 0 0 -.318 -.379l-.084 -.023z"
                        stroke-width="0" fill="currentColor"></path>
                </svg>
                <span class="font-bold">Medianet <span class="font-medium text-zinc-500">AdsManager</span></span>
            </div>
            <!-- END Heading -->

            <!-- Close Sidebar on Mobile -->
            <div class="lg:hidden pt-6">
                <button type="button"
                    class="group -mr-2 inline-flex items-center gap-1.5 rounded px-2.5 py-2 text-sm font-medium transition hover:bg-zinc-200/75 active:bg-zinc-100 active:text-zinc-700"
                    x-on:click="mobileSidebarOpen = false">
                    <svg class="hi-solid hi-x inline-block h-5 w-5 text-zinc-700 group-hover:text-rose-600"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <!-- END Close Sidebar on Mobile -->
        </div>
        <!-- END Sidebar Header -->

        <x-layouts.sidebar.nav />

    </div>
    <!-- END Sidebar Content -->
</nav>
<!-- Page Sidebar -->
