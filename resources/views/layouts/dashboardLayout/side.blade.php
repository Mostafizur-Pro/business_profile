<aside class="fixed hidden md:block lg:block inset-y-0 left-0  bg-white  border-r shadow-xl     z-50">
    <!-- Logo and close button -->
    <div class="h-20 relative">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 dark:text-white xl:hidden" aria-hidden="true" sidenav-close-btn=""></i>
        <a href="/" class="block p-6 text-sm whitespace-nowrap text-slate-700 dark:text-white">
            <img src="/images/logo/logo.png" class="inline-block h-full max-w-full transition-all duration-200 ease-in-out max-h-12 dark:hidden" alt="main_logo">
        </a>
    </div>
    <!-- Separator line -->
    <hr class="my-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
    <!-- Sidebar content -->
    <div class="p-4">
        <ul class="flex flex-col space-y-2 mt-4 pl-0 list-none">
            <!-- Dashboard -->
            <li>
                <div class="text-sm leading-default py-2.7 px-4 flex items-center rounded-lg bg-blue-500/30 font-semibold text-slate-700 transition-all dark:text-white dark:opacity-80 dark:antialiased dark:transition-all dark:duration-200 dark:content-['\f107']" aria-expanded="true">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black">

                    </div>
                    <span class="ml-2 transition-opacity opacity-100">Dashboards</span>
                </div>
                <div class="overflow-hidden transition-all duration-200 ease-in-out" style="max-height: 264px;">
                    <ul class="pl-6 mt-2 list-none">
                        <!-- Landing -->
                        <li>
                            <a href="/adminDashboard" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>Profile</span>
                            </a>
                        </li>
                        <!-- Landing -->

                        @if($adminData->role === 'superAdmin')
                        <li>
                            <a href="/adminInfo" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>Admin Information</span>
                            </a>
                        </li>
                        @endif


                        <!-- Smart Home -->
                        <li>
                            <a href="/ad_userInfo" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>User Information 2024</span>
                            </a>
                        </li>
                        <!-- Smart Home -->
                        <li>
                            <a href="/userInfoOld" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>User Information 2023</span>
                            </a>
                        </li>

                        <!-- Smart Home -->
                        <li>
                            <a href="/empInfo" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>Employee Information</span>
                            </a>
                        </li>

                        <!-- Smart Home -->
                        <li>
                            <a href="/packageItem" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>Package Item</span>
                            </a>
                        </li>





                    </ul>
                </div>
            </li>

            @if($adminData->role === 'superAdmin')
            <li>
    <h6 class="pl-6 mt-3 ml-2 text-md font-bold leading-tight uppercase opacity-60 dark:text-white">Alerts</h6>
    <hr class="my-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
</li>
            <li>
                <div class="overflow-hidden transition-all duration-200 ease-in-out" style="max-height: 264px;">
                    <ul class="pl-6 mt-2 list-none">
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


                        <li>
                            <a href="/deleteUserInfo" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <div type="button" class="relative inline-flex items-center pr-5  text-sm font-medium text-center   rounded-lg ">
                                    <button>Delete </button>
                                    @if(count($deleteData) > 0)
                                    <div class="{{ count($deleteData) > 0 ? 'notification' : '' }} absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900"> {{ count($deleteData) }}</div>
                                    @endif
                                </div>
                            </a>
                        </li>

                        <!-- Smart Home -->

                        <li>
                            <a href="/pendingUserInfo" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <div type="button" class="relative inline-flex items-center pr-5  text-sm font-medium text-center   rounded-lg ">
                                    Pending
                                    @if(count($pendingData) > 0)
                                    <div class="{{ count($pendingData) > 0 ? 'notification' : '' }} absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900"> {{ count($pendingData) }}</div>
                                    @endif
                                </div>
                            </a>
                        </li>


                    </ul>
                </div>
            </li>
            @endif



            <li>
                <h6 class="pl-6 mt-3 ml-2 text-md font-bold leading-tight uppercase opacity-60 dark:text-white">CREATE</h6>
                <hr class="my-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
            </li>
            <li>
                <div class="overflow-hidden transition-all duration-200 ease-in-out" style="max-height: 264px;">
                    <ul class="pl-6 mt-2 list-none">
                        <!-- Landing -->
                        @if($adminData->role === 'superAdmin')
                        <li>
                            <a href="/adminRegister" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>Create Admin </span>
                            </a>
                        </li>
                        @endif


                        <!-- Smart Home -->
                        <li>
                            <a href="/userRegister" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>Create User</span>
                            </a>
                        </li>

                        <!-- Smart Home -->
                        <li>
                            <a href="/empRegister" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>Create Employee</span>
                            </a>
                        </li>


                        <!-- Smart Home -->

                        <!-- <li>
                            <a href="/adminDashboard" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>Create Package</span>
                            </a>
                        </li> -->

                    </ul>
                </div>
            </li>
            <li>
                <h6 class="pl-6 mt-3 ml-2 text-md font-bold leading-tight uppercase opacity-60 dark:text-white">PAGES</h6>
                <hr class="my-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
            </li>
            <li>
                <div class="overflow-hidden transition-all duration-200 ease-in-out" style="max-height: 264px;">
                    <ul class="pl-6 mt-2 list-none">
                        <!-- Landing -->
                        <li>
                            <a href="/#" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>About</span>
                            </a>
                        </li>
                        <!-- Smart Home -->
                        <li>
                            <a href="/#" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>Our Service</span>
                            </a>
                        </li>
                        <!-- Smart Home -->
                        <li>
                            <a href="/#" class="text-sm relative py-2.7 pl-4 my-2 flex items-center px-4 font-medium">
                                <span>Products</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>