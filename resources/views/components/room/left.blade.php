<div class=" flex flex-col mx-auto bg-white">
    <aside class="group/sidebar flex flex-col shrink-0 lg:w-[300px] w-[250px] transition-all duration-300 ease-in-out m-0  z-40 inset-y-0 left-0 bg-white border-r border-r-dashed border-r-neutral-200 sidenav fixed-start loopple-fixed-start" id="sidenav-main">


        <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div>



        @if($adminData || $empData || $userData)

        @if($adminData)
        <div class="flex items-center justify-between px-8 py-5">
            <div class="flex items-center mr-5">

                <div class="mr-5">
                    <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                        <img class="w-16  shrink-0 inline-block rounded-[.95rem]" src="{{ $adminData->admin_image }}" alt="avatar image">
                    </div>
                </div>
                <div class="mr-2 ">
                    <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{ $adminData->admin_name }}</a>
                    <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]">{{ $adminData->role }}</span>
                </div>
            </div>
            <a class="inline-flex relative items-center group justify-end text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-[.95rem] transition-colors duration-150 ease-in-out text-dark bg-transparent shadow-none border-0" href="javascript:void(0)">
                <span class="leading-none transition-colors duration-200 ease-in-out peer shrink-0 group-hover:text-primary text-secondary-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </span>
            </a>
        </div>
        @elseif($empData)
        <div class="flex items-center justify-between px-8 py-5">
            <div class="flex items-center mr-5">

                <div class="mr-5">
                    <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                        <img class="w-16  shrink-0 inline-block rounded-[.95rem]" src="{{ $empData->emp_image }}" alt="avatar image">
                    </div>
                </div>
                <div class="mr-2 ">
                    <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{ $empData->emp_name }}</a>
                    <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]">{{ $empData->emp_role }}</span>
                </div>
            </div>
            <a class="inline-flex relative items-center group justify-end text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-[.95rem] transition-colors duration-150 ease-in-out text-dark bg-transparent shadow-none border-0" href="javascript:void(0)">
                <span class="leading-none transition-colors duration-200 ease-in-out peer shrink-0 group-hover:text-primary text-secondary-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </span>
            </a>
        </div>
        @elseif($userData)
        <div class="flex items-center justify-between px-8 py-5">
            <div class="flex items-center mr-5">

                <div class="mr-5">
                    <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
                        <img class="w-16  shrink-0 inline-block rounded-[.95rem]" src="{{ $userData->owner_image }}" alt="avatar image">
                    </div>
                </div>
                <div class="mr-2 ">
                    <a href="javascript:void(0)" class="dark:hover:text-primary hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-medium dark:text-neutral-400/90 text-secondary-inverse">{{ $userData->owner_name }}</a>
                    <span class="text-secondary-dark dark:text-stone-500 font-medium block text-[0.85rem]">{{ $userData->owner_role }}</span>
                </div>
            </div>
            <a class="inline-flex relative items-center group justify-end text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-[.95rem] transition-colors duration-150 ease-in-out text-dark bg-transparent shadow-none border-0" href="javascript:void(0)">
                <span class="leading-none transition-colors duration-200 ease-in-out peer shrink-0 group-hover:text-primary text-secondary-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </span>
            </a>
        </div>
        @endif


        @else

        @endif



        <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div>



        <form class="mx-5 my-10">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>


        <!-- <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div> -->



        <div class="menu text-lg">
            <!-- <li><a>Item 1</a></li> -->
            <li>
                <details close>
                    <summary class="text-sm ">Category</summary>
                    <div class="px-4 my-5 text-lg">
                        <h1 class=" text-stone-500 my-1">All Category</h1>
                        @foreach($categoriesList as $category)
                        <div class="collapse collapse-plus">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title m-0 text-lg font-bold ">
                                {{ $category['category'] }}
                            </div>
                            <div class="collapse-content text-blue-500">
                                @foreach($category['subcategories'] as $subcategory)
                                <p class="py-1"><a href="{{url($subcategory['link'])}}">{{ $subcategory['name'] }}</a></p>
                                @endforeach
                            </div>
                        </div>
                        @endforeach


                    </div>
                </details>
            </li>
        </div>

        <div class="hidden border-b border-dashed lg:block dark:border-neutral-700/70 border-neutral-200"></div>
        <div class="menu text-lg">
            <!-- <li><a>Item 1</a></li> -->
            <li>
                <details open>
                    <summary class="text-sm ">Location</summary>
                    <div class="px-4 my-10 text-lg">
                        <h1 class=" text-stone-500 my-1">All Bangladesh</h1>
                        @foreach($locationsList as $location)
                        <div class="collapse collapse-plus">
                            <input type="radio" name="my-accordion-3" />
                            <div class="collapse-title m-0 text-lg font-bold ">
                                {{ $location['location'] }}
                            </div>
                            <div class="collapse-content text-blue-500">
                                @foreach($location['place'] as $place)

                                <!--  -->
                                <ul>
                                    @if(isset($place['area']))
                                    <li>
                                        <details close>
                                            <summary>
                                            <p class="font-semibold">{{ $place['name'] }}</p>        
                                        </summary>
                                            <ul>
                                                @foreach($place['area'] as $area)
                                                <li><a class="text-black">{{ $area }}</a></li>

                                                @endforeach


                                            </ul>
                                        </details>
                                    </li>

                                    @else
                                    <li>
                                        <button class="font-semibold">{{ $place['name'] }}</button>
                                    </li>

                                    @endif


                                </ul>

                                <!--  -->


                                <!--  -->








                                @endforeach
                            </div>
                        </div>
                        @endforeach

                    </div>
                </details>
            </li>
        </div>



    </aside>
</div>