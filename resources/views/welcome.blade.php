<x-layouts.app>

    <main id="page-content" class="grow bg-zinc-100 pt-20 lg:pt-0">
        <div class="container mx-auto px-0 py-2 lg:p-5">

            <div class="mb-2 rounded-md bg-white border border-zinc-200/75">
                <div class="flex gap-4 px-5 py-4 md:px-8 md:py-5">
                    <div class="grow space-y-4">
                        <div class="flex flex-col justify-between gap-2 sm:flex-row sm:items-center">
                            <div class="grow">
                                <h3 class="text-lg font-bold">
                                    <span>Advertisements</span>
                                    {{-- <svg class="hi-mini hi-paper-clip inline-block h-5 w-5 text-zinc-500"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                            clip-rule="evenodd" />
                                    </svg> --}}
                                </h3>
                            </div>
                            <div class="flex-none">
                                <div class="flex items-center space-x-2 text-sm">
                                    <div class="text-zinc-950">All locations</div>
                                    <button type="button" class="p-0.5 border border-zinc-200 rounded-md group">
                                        <div
                                            class="bg-zinc-100 text-zinc-500 p-1 rounded-md group-hover:bg-zinc-200 group-hover:text-zinc-700 transition-colors duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 21h18"></path>
                                                <path d="M19 21v-4"></path>
                                                <path d="M19 17a2 2 0 0 0 2 -2v-2a2 2 0 1 0 -4 0v2a2 2 0 0 0 2 2z">
                                                </path>
                                                <path d="M14 21v-14a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v14"></path>
                                                <path d="M9 17v4"></path>
                                                <path d="M8 13h2"></path>
                                                <path d="M8 9h2"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <div class="text-sm flex space-x-3">
                                    <button type="button" class="p-0.5 border border-zinc-200 rounded-md group">
                                        <div
                                            class="flex items-center space-x-1 pr-2 bg-zinc-100 p-1 rounded group-hover:bg-zinc-100 group-hover:text-zinc-700 transition-colors duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-zinc-950"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M4 6l16 0"></path>
                                                <path d="M4 12l16 0"></path>
                                                <path d="M4 18l16 0"></path>
                                            </svg>
                                            <span class="">All</span>
                                        </div>
                                    </button>
                                    <button type="button" class="p-0.5 border border-zinc-200 rounded-md group">
                                        <div
                                            class="flex items-center space-x-1 pr-2 p-1 rounded group-hover:bg-zinc-100 group-hover:text-zinc-700 transition-colors duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-green-500"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-5 6.66a2 2 0 0 0 -1.977 1.697l-.018 .154l-.005 .149l.005 .15a2 2 0 1 0 1.995 -2.15z"
                                                    stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                            <span class="">Active</span>
                                        </div>
                                    </button>
                                    <button type="button" class="p-0.5 border border-zinc-200 rounded-md group">
                                        <div
                                            class="flex items-center space-x-1 pr-2 p-1 rounded group-hover:bg-zinc-100 group-hover:text-zinc-700 transition-colors duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-red-500"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-5 6.66a2 2 0 0 0 -1.977 1.697l-.018 .154l-.005 .149l.005 .15a2 2 0 1 0 1.995 -2.15z"
                                                    stroke-width="0" fill="currentColor"></path>
                                            </svg>
                                            <span class="">Expired</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div>2</div>
                        </div>
                    </div>
                </div>
                <div class="prose prose-sm max-w-none p-6 md:p-10 border-t border-zinc-100">

                    hello world
                </div>
            </div>

        </div>
    </main>

</x-layouts.app>
