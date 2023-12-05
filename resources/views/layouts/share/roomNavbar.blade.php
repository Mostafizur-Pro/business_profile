<div class="fixed top-0 z-50 w-full  -translate-x-1/2 bg-[#282560] border-t border-gray-200 left-1/2 dark:bg-gray-700 dark:border-gray-600">

    <div class="grid h-full max-w-lg grid-cols-6 mx-auto">


        <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center p-4 group">
            <a href="{{url('/')}}">
                <img class="w-5" src="/assets/room/logo.png" alt="">
            </a>
        </button>
        <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="/room">
                <svg class="w-5 h-5 mb-1 text-gray-200 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
            </a>
            <span class="sr-only">Home</span>
        </button>

        <button data-tooltip-target="tooltip-bookmark" type="button" class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="/">
                <svg class="w-5 h-5 mb-1 text-gray-200 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                    <path d="M13 20a1 1 0 0 1-.64-.231L7 15.3l-5.36 4.469A1 1 0 0 1 0 19V2a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v17a1 1 0 0 1-1 1Z" />
                </svg>
                <span class="sr-only">Bookmark</span>
            </a>
        </button>
        <button onclick="my_modal_3.showModal()" data-tooltip-target="tooltip-post" type="button" class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">

            <svg class="w-5 h-5 mb-1 text-gray-200 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
            </svg>
            <span class="sr-only">New post</span>

        </button>
        <button data-tooltip-target="tooltip-search" type="button" class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="">
                <svg class="w-5 h-5 mb-1 text-gray-200 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </a>
            <span class="sr-only">Search</span>
        </button>
        <button data-tooltip-target="tooltip-settings" type="button" class="inline-flex flex-col items-center justify-center p-4 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <a href="">
                <svg class="w-5 h-5 mb-1 text-gray-200 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                </svg>
            </a>
            <span class="sr-only">Settings</span>
        </button>

        <!-- Modal toggle -->
        <!-- You can open the modal using ID.showModal() method -->
        <!-- <button class="btn" onclick="my_modal_3.showModal()">open modal</button> -->
        <dialog id="my_modal_3" class="modal">
            <div class="modal-box">
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <h3 class="font-bold text-center text-xl">Create Post</h3>

                <div>
                    @if($adminData || $empData || $userData)

                    @if($adminData)
                    <div class="flex items-center justify-between px-8 py-5">
                        <div class="flex items-center mr-5">

                            <div class="mr-5">
                                <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                                    <img class="w-10 shrink-0 inline-block rounded-[.95rem]" src="{{ $adminData->admin_image }}" alt="avatar image">
                                </div>
                            </div>
                            <div class="mr-2 ">
                                <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{ $adminData->admin_name }}</a>
                                <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]">{{ $adminData->role }}</span>
                            </div>
                        </div>
                        
                    </div>
                    @elseif($empData)
                    <div class="flex items-center justify-between px-8 py-5">
                        <div class="flex items-center mr-5">

                            <div class="mr-5">
                                <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                                    <img class="w-10 shrink-0 inline-block rounded-[.95rem]" src="{{ $empData->emp_image }}" alt="avatar image">
                                </div>
                            </div>
                            <div class="mr-2 ">
                                <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{ $empData->emp_name }}</a>
                                <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]">{{ $empData->emp_role }}</span>
                            </div>
                        </div>
                        
                    </div>
                    @elseif($userData)
                    <div class="flex items-center justify-between px-8 py-5">
                        <div class="flex items-center mr-5">

                            <div class="mr-5">
                                <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                                    <img class="w-10 shrink-0 inline-block rounded-[.95rem]" src="{{ $userData->owner_image }}" alt="avatar image">
                                </div>
                            </div>
                            <div class="mr-2 ">
                                <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{ $userData->owner_name }}</a>
                                <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]">{{ $userData->owner_role }}</span>
                            </div>
                        </div>
                        
                    </div>
                    @endif


                    @else

                    @endif
                </div>



                <form action="your_php_script.php" method="post">
                    <div>

                        <textarea id="post" name="post" rows="4" cols="50" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-700 transition ease-in-out duration-150">
                            Post to Facebook
                        </button>
                    </div>
                </form>

            </div>
        </dialog>

        <!-- Main modal -->


    </div>
</div>