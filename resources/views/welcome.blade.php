<x-layouts.app>

    <!-- Page Content -->
    <main id="page-content" class="grow bg-zinc-100 pt-20 lg:pt-0">
        <div class="container mx-auto px-4 py-4 lg:p-8">
            <!-- Actions -->
            <div
                class="sticky top-20 z-20 flex gap-4 rounded-t border-b border-dashed border-zinc-200 bg-white/80 p-4 backdrop-blur-sm lg:-top-0.5">
                <div class="flex gap-1">
                    <button type="button"
                        class="group inline-flex items-center gap-1.5 rounded bg-zinc-100 px-2.5 py-2 text-sm font-medium hover:bg-zinc-200/75 active:bg-zinc-100 active:text-zinc-700">
                        <svg class="hi-mini hi-archive-box-arrow-down inline-block h-5 w-5 text-zinc-700 group-hover:text-indigo-600 xl:text-zinc-400"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M2 3a1 1 0 00-1 1v1a1 1 0 001 1h16a1 1 0 001-1V4a1 1 0 00-1-1H2zm0 4.5h16l-.811 7.71a2 2 0 01-1.99 1.79H4.802a2 2 0 01-1.99-1.79L2 7.5zM10 9a.75.75 0 01.75.75v2.546l.943-1.048a.75.75 0 111.114 1.004l-2.25 2.5a.75.75 0 01-1.114 0l-2.25-2.5a.75.75 0 111.114-1.004l.943 1.048V9.75A.75.75 0 0110 9z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="hidden xl:inline-block">Archive</span>
                    </button>
                    <button type="button"
                        class="group inline-flex items-center gap-1.5 rounded bg-zinc-100 px-2.5 py-2 text-sm font-medium hover:bg-zinc-200/75 active:bg-zinc-100 active:text-zinc-700">
                        <svg class="hi-mini hi-trash group-hover inline-block h-5 w-5 text-zinc-700 group-hover:text-rose-600 xl:text-zinc-400"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="hidden xl:inline-block">Delete</span>
                    </button>
                </div>
                <div class="flex gap-1">
                    <button type="button"
                        class="group inline-flex items-center gap-1.5 rounded bg-zinc-100 px-2.5 py-2 text-sm font-medium hover:bg-zinc-200/75 active:bg-zinc-100 active:text-zinc-700">
                        <svg class="bi bi-reply-fill inline-block h-5 w-5 text-zinc-700 group-hover:text-zinc-600 xl:text-zinc-400"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
                            aria-hidden="true">
                            <path
                                d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
                        </svg>
                        <span class="hidden xl:inline-block">Reply</span>
                    </button>
                    <button type="button"
                        class="group inline-flex items-center gap-1.5 rounded bg-zinc-100 px-2.5 py-2 text-sm font-medium hover:bg-zinc-200/75 active:bg-zinc-100 active:text-zinc-700">
                        <svg class="bi bi-reply-all-fill inline-block h-5 w-5 text-zinc-700 group-hover:text-zinc-600 xl:text-zinc-400"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
                            aria-hidden="true">
                            <path
                                d="M8.021 11.9 3.453 8.62a.719.719 0 0 1 0-1.238L8.021 4.1a.716.716 0 0 1 1.079.619V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
                            <path
                                d="M5.232 4.293a.5.5 0 0 1-.106.7L1.114 7.945a.5.5 0 0 1-.042.028.147.147 0 0 0 0 .252.503.503 0 0 1 .042.028l4.012 2.954a.5.5 0 1 1-.593.805L.539 9.073a1.147 1.147 0 0 1 0-1.946l3.994-2.94a.5.5 0 0 1 .699.106z" />
                        </svg>
                        <span class="hidden xl:inline-block">Reply to all</span>
                    </button>
                    <button type="button"
                        class="group inline-flex items-center gap-1.5 rounded bg-zinc-100 px-2.5 py-2 text-sm font-medium hover:bg-zinc-200/75 active:bg-zinc-100 active:text-zinc-700">
                        <svg class="bi bi-forward-fill inline-block h-5 w-5 text-zinc-700 group-hover:text-zinc-600 xl:text-zinc-400"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
                            aria-hidden="true">
                            <path
                                d="m9.77 12.11 4.012-2.953a.647.647 0 0 0 0-1.114L9.771 5.09a.644.644 0 0 0-.971.557V6.65H2v3.9h6.8v1.003c0 .505.545.808.97.557z" />
                        </svg>
                        <span class="hidden xl:inline-block">Forward</span>
                    </button>
                </div>
                <div class="flex gap-1">
                    <button type="button"
                        class="group inline-flex items-center gap-1.5 rounded bg-zinc-100 px-2.5 py-2 text-sm font-medium hover:bg-zinc-200/75 active:bg-zinc-100 active:text-zinc-700">
                        <svg class="hi-mini hi-star inline-block h-5 w-5 text-zinc-700 group-hover:text-orange-500 xl:text-zinc-400"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="hidden xl:inline-block">Star</span>
                    </button>
                </div>
            </div>
            <!-- END Actions -->

            <!-- Message -->
            <div class="mb-2 rounded-b bg-white">
                <div class="flex gap-4 px-6 py-4 md:px-10 md:py-8">
                    <div class="relative flex-none">
                        <img src="https://images.unsplash.com/photo-1567186937675-a5131c8a89ea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=160&ixid=MXwxfDB8MXxhbGx8fHx8fHx8fA&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=160"
                            alt="User Avatar" class="h-12 w-12 rounded-full border-2 border-white/50" />
                    </div>
                    <div class="grow">
                        <div class="flex flex-col justify-between gap-2 sm:flex-row sm:items-center">
                            <div class="grow">
                                <p class="line-clamp-1 font-semibold">John Smith</p>
                                <p class="line-clamp-1 text-sm font-medium text-zinc-500">
                                    j.smith@example.com
                                </p>
                            </div>
                            <div class="flex-none">
                                <p class="text-xs font-medium leading-relaxed text-zinc-500">
                                    June 12, 2023 - 12:30
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="border-y border-dashed border-zinc-200 px-6 py-3 text-lg font-bold md:px-10">
                    <span>Design Report</span>
                    <svg class="hi-mini hi-paper-clip inline-block h-5 w-5 text-zinc-500"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                            clip-rule="evenodd" />
                    </svg>
                </h3>
                <div class="prose prose-sm max-w-none p-6 md:p-10">
                    <p>Hello John,</p>
                    <p>
                        I hope this email finds you well. I wanted to update you on the
                        progress of our web development project. I'm pleased to inform
                        you that our team has taken a thorough look into the design, and
                        we have prepared a comprehensive report for your review.
                    </p>
                    <p>
                        The design review report encompasses various aspects, including
                        the visual aesthetics, user experience, and functionality of the
                        website. Our team has conducted a detailed analysis to identify
                        strengths, potential areas of improvement, and actionable
                        recommendations to ensure the design aligns perfectly with your
                        goals and requirements.
                    </p>
                    <p>
                        I understand how crucial your input is to the success of this
                        project. Therefore, I kindly request you to take some time to
                        carefully review the report. We value your expertise and
                        insights, and your feedback will play a pivotal role in refining
                        the design further.
                    </p>
                    <p>
                        Please find the attached design review report for your
                        convenience. Should you have any questions, concerns, or if
                        there's anything specific you would like us to focus on, please
                        don't hesitate to reach out. We are here to address any queries
                        and work collaboratively towards achieving the best possible
                        outcome.
                    </p>
                    <p>
                        Thank you for your time and attention to this matter. We greatly
                        appreciate your active involvement in the design review process.
                        We look forward to receiving your valuable feedback, which will
                        enable us to enhance the design and move forward with the
                        project.
                    </p>
                    <p>Best Regards,</p>
                    <p>
                        <strong>John Smith</strong><br />
                        Web Development Team
                    </p>

                    <!-- Attachments -->
                    <div class="flex items-start gap-3">
                        <button type="button"
                            class="group inline-flex w-48 flex-col items-center gap-1 rounded-lg bg-zinc-100 px-2.5 py-4 text-sm transition hover:bg-zinc-200/75 active:bg-zinc-100 active:text-zinc-700">
                            <svg class="hi-outline hi-document-chart-bar mb-2 inline-block h-12 w-12 text-zinc-500 group-hover:text-indigo-600"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span class="font-semibold">website-design.fig</span>
                            <span class="font-medium text-zinc-500">20.6MB</span>
                        </button>
                        <button type="button"
                            class="group inline-flex w-48 flex-col items-center gap-1 rounded-lg bg-zinc-100 px-2.5 py-4 text-sm transition hover:bg-zinc-200/75 active:bg-zinc-100 active:text-zinc-700">
                            <svg class="hi-outline hi-document-chart-bar mb-2 inline-block h-12 w-12 text-zinc-500 group-hover:text-indigo-600"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span class="font-semibold">app-design.fig</span>
                            <span class="font-medium text-zinc-500">16.77MB</span>
                        </button>
                    </div>
                    <!-- END Attachments -->
                </div>
            </div>
            <!-- END Message -->

        </div>
    </main>
    <!-- END Page Content -->

</x-layouts.app>
