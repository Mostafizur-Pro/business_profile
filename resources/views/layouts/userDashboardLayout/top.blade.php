<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-60">


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
                                <a href="/user/dashboard" class="text-base text-gray-900 transition duration-75 pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Profile</a>
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

                <li>
                    <a href="/user/userLogout" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">

                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                        </svg>

                        <span class="ml-3" sidebar-toggle-item>Lagout</span>
                    </a>
                </li>
            </ul>
        </div>
        <a href="/" class=" normal-case text-xl">
            <img src="/assets/logo/logo.png" class="w-44 sm:block md:hidden" alt="main_logo">
        </a>
    </div>
    <div class="navbar-center hidden lg:flex">

    </div>
    <div class="navbar-end hidden sm:block">
        <div class=" flex justify-between ">
            <!-- <a class="block  p-6 text-sm whitespace-nowrap text-slate-700 ">
                <img src="/assets/logo/logo.png" class="sm:block md:hidden h-full max-w-full transition-all duration-200 ease-in-out max-h-8 dark:hidden" alt="main_logo">
            </a> -->
            <div class="flex items-center gap-5">
                <div class="flex items-center gap-2">
                    <div class="">
                        <img class="w-10 rounded-full" src="{{ $userData->owner_image }}" />
                    </div>
                    <div>
                        <p class="font-semibold">{{$userData->owner_name}}</p>
                        <p class="capitalize text-sm">{{$userData->owner_role}}</p>
                    </div>
                </div>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M13.094 2.085l-1.013-.082a1.082 1.082 0 0 0-.161 0l-1.063.087C6.948 2.652 4 6.053 4 10v3.838l-.948 2.846A1 1 0 0 0 4 18h4.5c0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5H20a1 1 0 0 0 .889-1.495L20 13.838V10c0-3.94-2.942-7.34-6.906-7.915zM12 19.5c-.841 0-1.5-.659-1.5-1.5h3c0 .841-.659 1.5-1.5 1.5zM5.388 16l.561-1.684A1.03 1.03 0 0 0 6 14v-4c0-2.959 2.211-5.509 5.08-5.923l.921-.074.868.068C15.794 4.497 18 7.046 18 10v4c0 .107.018.214.052.316l.56 1.684H5.388z" fill="black" />
                    </svg>
                </button>
                <a href="{{url('/user/userLogout')}}">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z" fill="black" />
                            <path d="M11 2h2v10h-2z" fill="black" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>