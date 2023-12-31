<aside class="fixed hidden md:block lg:block inset-y-0 left-0  bg-white  border-r shadow-xl     z-50">
    <!-- Logo and close button -->
    <div class="h-20 relative">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400  xl:hidden" aria-hidden="true" sidenav-close-btn=""></i>
        <a href="/" class="block p-6 text-sm whitespace-nowrap text-slate-700 ">
            <img src="/assets/logo/logo.png" class="inline-block h-full max-w-full transition-all duration-200 ease-in-out max-h-12 dark:hidden" alt="main_logo">
        </a>
    </div>
    <!-- Separator line -->
    <hr class="my-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
    <!-- Sidebar content -->
    <div class="p-4">
        <ul class="flex flex-col space-y-2 mt-4 pl-0 list-none">
            <div class="overflow-hidden transition-all duration-200 ease-in-out">
                <ul class="menu pl-6 mt-2 list-none">
                    <li>
                        <a href="/user/dashboard" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <details close>
                            <summary class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Profile</span>
                            </summary>
                            <ul>
                                <li>
                                    <a href="/user/profile" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ url('/user/edit_userInfo_profile', $userData->id) }}" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Settings</a>
                                </li>
                            </ul>
                        </details>
                    </li>
                    <!-- package -->
                    <li>
                        <details close>
                            <summary class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Package Items</span>
                            </summary>
                            <ul>
                                <li>
                                    <a href="/user/packageItem" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Package List</a>
                                </li>

                            </ul>
                        </details>
                    </li>
                    <!-- Page -->
                    <li>
                        <details close>
                            <summary class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Page</span>
                            </summary>
                            <ul>

                                <li>
                                    <a href="/room" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Hall Room</a>
                                </li>

                                <li>
                                    <a href="/about" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">About Us</a>
                                </li>
                                <li>
                                    <a href="/contact" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Contact</a>
                                </li>
                                <li>
                                    <a href="/members/our-employees" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Our Employee List</a>
                                </li>
                                <li>
                                    <a href="/members/our-clients" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Our Clients List</a>
                                </li>
                                <li>
                                    <a href="/members/our-best-employees" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Our Best Employee List</a>
                                </li>

                            </ul>
                        </details>
                    </li>




                </ul>
            </div>
        </ul>
    </div>
</aside>