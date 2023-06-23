<!-- Page Header -->
<header id="page-header"
    class="fixed left-0 right-0 top-0 z-30 flex h-20 flex-none items-center bg-white/80 shadow-sm backdrop-blur-sm lg:left-80 lg:hidden">
    <div class="container mx-auto flex justify-between px-4 lg:px-8 xl:max-w-7xl">
        <!-- Left Section -->
        <div class="flex items-center space-x-2">
            <!-- Brand -->
            <a href="javascript:void(0)"
                class="group inline-flex items-center space-x-2 text-lg font-bold tracking-wide text-zinc-800 transition hover:opacity-75 active:opacity-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ad-filled" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M19 4h-14a3 3 0 0 0 -3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3 -3v-10a3 3 0 0 0 -3 -3zm-10 4a3 3 0 0 1 2.995 2.824l.005 .176v4a1 1 0 0 1 -1.993 .117l-.007 -.117v-1h-2v1a1 1 0 0 1 -1.993 .117l-.007 -.117v-4a3 3 0 0 1 3 -3zm0 2a1 1 0 0 0 -.993 .883l-.007 .117v1h2v-1a1 1 0 0 0 -1 -1zm8 -2a1 1 0 0 1 .993 .883l.007 .117v6a1 1 0 0 1 -.883 .993l-.117 .007h-1.5a2.5 2.5 0 1 1 .326 -4.979l.174 .029v-2.05a1 1 0 0 1 .883 -.993l.117 -.007zm-1.41 5.008l-.09 -.008a.5 .5 0 0 0 -.09 .992l.09 .008h.5v-.5l-.008 -.09a.5 .5 0 0 0 -.318 -.379l-.084 -.023z"
                        stroke-width="0" fill="currentColor"></path>
                </svg>
                {{-- <svg class="hi-mini hi-envelope-open inline-block h-5 w-5 -rotate-6 text-zinc-900 transition ease-out group-hover:rotate-0"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M2.106 6.447A2 2 0 001 8.237V16a2 2 0 002 2h14a2 2 0 002-2V8.236a2 2 0 00-1.106-1.789l-7-3.5a2 2 0 00-1.788 0l-7 3.5zm1.48 4.007a.75.75 0 00-.671 1.342l5.855 2.928a2.75 2.75 0 002.46 0l5.852-2.926a.75.75 0 10-.67-1.342l-5.853 2.926a1.25 1.25 0 01-1.118 0l-5.856-2.928z"
                        clip-rule="evenodd" />
                </svg> --}}
                <span>Medianet <span class="font-medium text-zinc-500">AdsManager</span></span>
            </a>
            <!-- END Brand -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="flex items-center space-x-2">
            <!-- Toggle Sidebar on Mobile -->
            <button type="button"
                class="group inline-flex items-center gap-1.5 rounded bg-zinc-100 px-2.5 py-2 text-sm font-medium hover:bg-zinc-200/75 active:bg-zinc-100 active:text-zinc-700"
                x-on:click="mobileSidebarOpen = true">
                <svg class="hi-solid hi-menu-alt-1 inline-block h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <!-- END Toggle Sidebar on Mobile -->
        </div>
        <!-- END Right Section -->
    </div>
</header>
<!-- END Page Header -->
