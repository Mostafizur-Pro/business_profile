<style>
    .notification {
        animation: pulse 1s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
    }
</style>


<aside class="fixed hidden md:block lg:block inset-y-0 left-0  bg-white  border-r shadow-xl     z-50">
    <!-- Logo and close button -->
    <div class="h-20 relative">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 dark:text-white xl:hidden" aria-hidden="true" sidenav-close-btn=""></i>
        <a href="/" class="block p-6 text-sm whitespace-nowrap text-slate-700 dark:text-white">
            <img src="/assets/logo/logo.png" class="inline-block h-full max-w-full transition-all duration-200 ease-in-out max-h-12 dark:hidden" alt="main_logo">
        </a>
    </div>
    <!-- Separator line -->
    <hr class="my-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
    <!-- Sidebar content -->
    <div class="p-4">
        <ul class="flex flex-col space-y-2 mt-4 pl-0 list-none">
            <!-- Dashboard -->
            <li>
                <!-- <div class="text-sm leading-default py-2.7 px-4 flex items-center rounded-lg bg-blue-500/30 font-semibold text-slate-700 transition-all dark:text-white dark:opacity-80 dark:antialiased dark:transition-all dark:duration-200 dark:content-['\f107']" aria-expanded="true">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black">

                    </div>
                    <span class="ml-2 transition-opacity opacity-100">Dashboards</span>
                </div> -->



                <div class="overflow-hidden transition-all duration-200 ease-in-out">
                    <ul class="menu pl-6 mt-2 list-none">
                        <li>
                            <a href="/adminDashboard" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
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
                                        <a href="/adminProfile" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('edit_admin_profile', $adminData->id) }}" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Settings</a>
                                    </li>
                                </ul>
                            </details>
                        </li>
                        <li>
                            <details close>
                                <summary class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>User</span>
                                </summary>
                                <ul>
                                    @if($adminData->role === 'superAdmin')
                                    <li>
                                        <a href="/adminInfo" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Admin Information</a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="/ad_userInfo" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Our Clients</a>
                                    </li>
                                    <li>
                                        <a href="/userInfoOld" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Our Old Clients</a>
                                    </li>
                                    <li>
                                        <a href="/empInfo" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Our Employee</a>
                                    </li>
                                </ul>
                            </details>
                        </li>

                        <!-- Inbox -->
                        @if($adminData->role === 'superAdmin')
                        <li>
                            <details close>
                                <summary class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">


                                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                        <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Inbox</span>
                                </summary>
                                <ul>
                                    @if($adminData->role === 'superAdmin')
                                    <li>
                                        <a href="/deleteUserInfo" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                            <div type="button" class="relative inline-flex pr-5   ">
                                                <button>Delete </button>
                                                @if(count($deleteData) > 0)
                                                <div class="{{ count($deleteData) > 0 ? 'notification' : '' }} absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900"> {{ count($deleteData) }}</div>
                                                @endif
                                            </div>
                                        </a>
                                    </li>
                                    @endif


                                    @if($adminData->role === 'superAdmin')
                                    <li>
                                        <a href="/pendingUserInfo" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                            <div type="button" class="relative inline-flex  pr-5 ">
                                                Pending
                                                @if(count($pendingData) > 0)
                                                <div class="{{ count($pendingData) > 0 ? 'notification' : '' }} absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900"> {{ count($pendingData) }}</div>
                                                @endif
                                            </div>
                                        </a>
                                    </li>
                                    @endif


                                </ul>
                            </details>
                        </li>
                        @endif


                        <!-- Package Items -->
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
                                        <a href="/packageItem" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Package List</a>
                                    </li>
                                    <li>
                                        <a class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add Package</a>
                                    </li>
                                </ul>
                            </details>
                        </li>
                        <!-- Authentication -->
                        <li>
                            <details close>
                                <summary class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Authentication</span>
                                </summary>
                                <ul>
                                    @if($adminData->role === 'superAdmin')
                                    <li>
                                        <a href="/adminRegister" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"> Add Admin </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="/userRegister" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add User</a>
                                    </li>
                                    <li>
                                        <a href="/empRegister" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add Employee</a>
                                    </li>
                                </ul>
                            </details>
                        </li>

                    </ul>
                </div>
            </li>







        </ul>
    </div>
</aside>