<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workflows</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .accordion-content {
            transition: max-height 0.3s ease-out, padding 0.3s ease;
        }
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body>
<div id="wrapper" x-data="init()" class="relative">
    <div class="container bg-gray-300 mx-auto min-h-screen">
        <x-navbar />

        <section class="container mx-auto my-8 px-8">
            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-8 py-4 px-8 bg-white shadow-lg">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="text-gray-800 text-xl font-semibold uppercase mb-4">Workflows</h2>
                            <p class="text-sm font-light text-gray-600 my-3">
                                These are template workflows we have
                            </p>
                        </div>
                        <div>
                            <button class="px-8 py-2 text-white bg-indigo-800 hover:bg-indigo-600 text-xs uppercase">Create Custom Workflow</button>
                        </div>
                    </div>
                    <div class="h-1 w-full mx-auto border-b my-5"></div>

                    <!-- Workflow Item -->
                    <div class="transition hover:bg-indigo-50">
                        <!-- Header -->
                        <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                            </svg>
                            <h3>Maize</h3>
                        </div>
                        <!-- /Header -->

                        <!-- Content -->
                        <div class="accordion-content px-5 pt-0 overflow-hidden mx-h-0">
                            <div class="ml-8 px-4 border-l-2">
                                <div class="mb-4">
                                    <h4 class="font-semibold text-baseline">Land Preparation</h4>
                                    <ul class="ml-4 px-4 list-disc">
                                        <li>Activity 1</li>
                                        <li>Activity 2</li>
                                    </ul>
                                </div>
                                <div class="mb-4">
                                    <h4 class="font-semibold text-baseline">Fertilizer Application</h4>
                                    <ul class="ml-4 px-4 list-disc">
                                        <li>Activity 1</li>
                                        <li>Activity 2</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Content -->
                    </div>
                    <!-- /Workflow Item -->

                    <!-- Workflow Item -->
                    <div class="transition hover:bg-indigo-50">
                        <!-- Header -->
                        <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                            </svg>
                            <h3>Tomato</h3>
                        </div>
                        <!-- /Header -->

                        <!-- Content -->
                        <div class="accordion-content px-5 pt-0 overflow-hidden mx-h-0">
                            <div class="ml-8 px-4 border-l-2">
                                <div class="mb-4">
                                    <h4 class="font-semibold text-baseline">Land Preparation</h4>
                                    <ul class="ml-4 px-4 list-disc">
                                        <li>Activity 1</li>
                                        <li>Activity 2</li>
                                    </ul>
                                </div>
                                <div class="mb-4">
                                    <h4 class="font-semibold text-baseline">Fertilizer Application</h4>
                                    <ul class="ml-4 px-4 list-disc">
                                        <li>Activity 1</li>
                                        <li>Activity 2</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Content -->
                    </div>
                    <!-- /Workflow Item -->
                </div>

                <div class="col-span-4 py-4 px-8 bg-white shadow-lg">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="text-gray-800 text-xl font-semibold uppercase mb-4">Activities</h2>
                            <p class="text-sm font-light text-gray-600 my-3">These are the Standard Agronomic Activities. You can create your custom ones in addition.</p>
                        </div>
                        <div>
                            <button
                                @click="console.log('clicked')"
                                class="px-4 py-2 text-white bg-indigo-800 hover:bg-indigo-600 text-xs uppercase"
                            >Create</button>
                        </div>
                    </div>

                    <div class="h-1 w-full mx-auto border-b my-5"></div>

                    <!-- Activity Item -->
                    <div class="border-b">
                        <div class="flex gap-2 px-5 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>

                            Land Purchase
                        </div>
                    </div>
                    <!-- Activity Item -->

                    <!-- Activity Item -->
                    <div class="border-b">
                        <div class="flex gap-2 px-5 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>

                            Spraying
                        </div>
                    </div>
                    <!-- Activity Item -->

                    <p x-cloak x-show="showModal">Some text</p>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Create Activity Modal -->
{{--<div x-show="showModal" class="mx-auto fixed top-0 left-0 w-full h-full flex items-center shadow-lg bg-gray-500 opacity-95">--}}
{{--    <div class="container mx-auto sm:max-w-xl rounded p-4 mt-2 overflow-y-auto">--}}
{{--        <div class="bg-white rounded px-8 py-8 bg-opacity-100 sm:max-w-xl sm:w-full">--}}
{{--            <h1 class="font-bold text-2xl mb-3">Modal Title</h1>--}}
{{--            <div class="modal-body">--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores autem, beatae distinctio esse et exercitationem</p>--}}
{{--            </div>--}}
{{--            <div class="mt-4">--}}
{{--                <button class="bg-blue-700 text-white">Close</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div x-data="{ open: true }">
    <div x-show="open" id="modal" x-on:showModal="console.log('show modal')">
        <div class="mx-auto  top-0 left-0 w-full h-full bg-gray-500 opacity-95">
            <p class="text-dark text-3xl">Some test</p>
        </div>
    </div>
</div>

<script>
    const accordionHeaders = document.querySelectorAll('.accordion-header');

    Array.from(accordionHeaders).forEach((header) => {
        header.addEventListener('click', function (e) {
            const accordionContent = header.parentElement.querySelector(".accordion-content");
            let accordionMaxHeight = accordionContent.style.maxHeight;

            if (
                accordionMaxHeight === '0px' ||
                accordionMaxHeight.length === 0
            ) {
                accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`;
                header.parentElement.classList.add("bg-indigo-50");
            } else {
                accordionContent.style.maxHeight = `0px`;
                header.parentElement.classList.remove("bg-indigo-50");
            }
        });
    })

    const init = () => {
        return {
            init() {
                console.log('init', this.showModal)
            },
            showModal: true,
            name: '',
            description: '',
        }
    }
</script>
</body>
</html>
