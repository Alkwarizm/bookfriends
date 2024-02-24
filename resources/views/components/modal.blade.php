<div x-show="showModal" class="fixed inset-0 transition-opacity" aria-hidden="true" @click="showModal = false">
    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
</div>
<div x-show="showModal" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="fixed z-10 inset-0 overflow-y-auto" x-cloak>
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Modal panel -->
        <div role="dialog" aria-modal="true" aria-labelledby="modal-headline" class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <!-- Modal content -->
                <div class="sm:flex sm:items-start">
                    {{--                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">--}}
                    {{--                            --}}
                    {{--                        </div>--}}
                    <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-w6 font-medium text-gray-900" id="modal-headline">Create Activity</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">Create your custom activity</p>
                            <form action="#!">
                                <input type="text" x-model="name" id="name"
                                       class="mt-2 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:border-blue-500">

                                <textarea x-model="description" id="description" rows="10"
                                          class="mt-2 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:border-blue-500"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
