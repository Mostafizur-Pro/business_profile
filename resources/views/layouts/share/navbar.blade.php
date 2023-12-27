<style>
    .header-links li span {
        position: relative;
        z-index: 0;
    }

    .header-links li span::before {
        content: '';
        position: absolute;
        z-index: -1;
        bottom: 2px;
        left: -4px;
        right: -4px;
        display: block;
        height: 6px;
    }

    .header-links li.active span::before {
        background-color: #fcae04;
    }

    .header-links li:not(.active):hover span::before {
        background-color: #ccc;
    }
</style>

<div class="navbar md:hidden">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">

                <!-- <li class="p-3 xl:p-6">
                    <a href="{{url('/room')}}">
                        <button class="bg-black hover:bg-gray-700 text-white font-bold px-4 xl:px-6 py-2 xl:py-3 rounded">Room</button>
                    </a>
                </li> -->
                <li class=" {{request()->routeIs('home') ? ' text-red-400' : ''}}">
                    <a href="{{url('/')}}">
                        <span>Home</span>
                    </a>
                </li>

                <li class=" {{request()->routeIs('service') ? ' text-red-400' : ''}}">
                    <a href="{{url('/service')}}">
                        <span> Services</span>
                    </a>
                </li>

                <li class=" {{request()->routeIs('package') ? ' text-red-400' : ''}}">
                    <a href="{{url('/package')}}">
                        <span>Package</span>
                    </a>
                </li>



                <li>
                    <a>Members</a>
                    <ul class="p-2">
                        <li><a href="{{url('/companies/country')}}">Country</a></li>
                        <li><a href="{{url('/companies/product')}}">Product</a></li>

                        <li><a href="{{url('/members/our-clients')}}">Our Clients</a></li>
                        <li><a href="{{url('/members/our-best-clients')}}">Our Best Clients</a></li>

                        <li><a href="{{url('/members/our-employees')}}">Our Employees</a></li>
                        <li><a href="{{url('/members/our-best-employees')}}">Our Best Employees</a></li>
                        <li><a href="{{url('/members/our-old-clients')}}">Our Old Clients</a></li>
                    </ul>
                </li>

                <li class=" {{request()->routeIs('about') ? ' text-red-400' : ''}}">
                    <a href="{{url('/about')}}">
                        <span>About</span>
                    </a>
                </li>

                <li class=" {{request()->routeIs('contact') ? ' text-red-400' : ''}}">
                    <a href="{{url('/contact')}}">
                        <span>Contacts</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- <a class="btn btn-ghost text-xl">daisyUI</a> -->
        <div>

            <a href="{{url('/')}}">
                <img class="w-48" src="/assets/logo/logo.png" alt="Business Profile">
            </a>
        </div>
    </div>


    <div>
        <a href="{{url('/room')}}">
            <div class="w-[100px] transition duration-300 ease-in-out hover:scale-110 object-cover">
                <img src="/assets/logo/b-room1.png" alt="">
            </div>
        </a>
    </div>


    <div class="navbar-end">
        <div class=" flex  items-center px-4 lg:px-6 xl:px-8">
            <a href="" class="mr-4 lg:mr-6 xl:mr-8">
                <svg class="h-6 xl:h-8" aria-hidden="true" focusable="false" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-3x">
                    <path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"></path>
                </svg>
            </a>

            @if($adminData || $empData || $userData)

            @if($adminData)
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="flex items-center  gap-3">

                    <div class="w-10 rounded-full">
                        <img class="w-10 rounded-full" src="{{ $adminData->admin_image }}" />
                    </div>
                    <div>
                        <p class="font-semibold">{{ $adminData->admin_name }}</p>
                        <p class="capitalize text-sm">{{ $adminData->role }}</p>
                    </div>

                </label>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a href="/admin/dashboard" class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a href="{{ url('admin/edit_profile', $adminData->id) }}">Settings</a></li>
                    <li><a href="{{url('/logout')}}">Logout</a></li>
                </ul>
            </div>
            @elseif($empData)
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="flex items-center  gap-3">

                    <div class="w-10 rounded-full">
                        <img class="w-10 rounded-full" src="{{ $empData->emp_image }}" />
                    </div>
                    <div>
                        <p class="font-semibold">{{ $empData->emp_name }}</p>
                        <p class="capitalize text-sm">{{ $empData->emp_role }}</p>
                    </div>

                </label>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a href="/employee/dashboard" class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a href="{{ url('edit_empInfo_profile', $empData->id) }}">Settings</a></li>
                    <li><a href="{{url('/empLogout')}}">Logout</a></li>
                </ul>
            </div>
            @elseif($userData)
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="flex items-center  gap-3">

                    <div>
                        <img class="w-10 rounded-full" src="{{ $userData->owner_image }}" />
                    </div>
                    <div>
                        <p class="font-semibold">{{ $userData->owner_name }}</p>
                        <p class="capitalize text-sm">{{ $userData->owner_role }}</p>
                    </div>

                </label>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a href="/user/dashboard" class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a href="{{ url('user/edit_userInfo_profile', $userData->id) }}">Settings</a></li>
                    <li><a href="{{url('/userLogout')}}">Logout</a></li>
                </ul>
            </div>
            @endif

            @else
            <div class="flex items-center px-4 lg:px-6 xl:px-8">
                <button class="text-[#fcae04] font-bold px-4 xl:px-6 py-2 xl:py-3 rounded">
                    <a href="/login">Login</a>
                </button>
            </div>
            @endif


        </div>

    </div>

</div>




<header class="bg-white shadow-lg h-16 hidden md:flex">
    <a href="" class="w-1/6  border flex-shrink-0 flex items-center justify-center px-4 lg:px-6 xl:px-8">
        <img alt="logo" src="/assets/logo/logo.png" />
    </a>

    <nav class="header-links contents font-semibold text-base lg:text-lg">
        <ul class="flex items-center ml-4 xl:ml-4 mr-auto">

            <li class=" {{request()->routeIs('home') ? 'p-3 xl:p-6 active' : 'p-3 xl:p-6'}}">
                <a href="{{url('/')}}">
                    <span>Home</span>
                </a>
            </li>

            <li class=" {{request()->routeIs('service') ?'p-3 xl:p-6 active' : 'p-3 xl:p-6'}}">
                <a href="{{url('/service')}}">
                    <span> Services</span>
                </a>
            </li>

            <li class=" {{request()->routeIs('package') ?'p-3 xl:p-6 active' : 'p-3 xl:p-6'}}">
                <a href="{{url('/package')}}">
                    <span>Package</span>
                </a>
            </li>

            <li class="p-3 xl:p-6">
                <a href="{{url('/room')}}">
                    <div class="w-[110px] mt-6 transition duration-300 ease-in-out hover:scale-110 object-cover">
                        <img src="/assets/logo/b-room1.png" alt="">
                    </div>
                </a>
            </li>

            <li class="p-3 xl:p-6">
                <div class="dropdown dropdown-start">
                    <label tabindex="0" class="flex items-center">
                        <span>Members</span>
                        <svg class="h-3 opacity-30 ml-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14 fa-7x">
                            <path fill="currentColor" d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z"></path>
                        </svg>
                    </label>
                    <ul tabindex="0" class="menu dropdown-content z-[1] p-2 shadow bg-white rounded-box w-96 mt-4">
                        <li>
                            <details close>
                                <summary>Country</summary>
                                <ul>
                                    <li><a href="{{url('companies/country')}}">Bangladesh</a></li>
                                    <li>
                                        <details close>
                                            <summary>Bangladesh All Division</summary>
                                            @foreach ($divisions as $division)
                                            <ul>
                                                <li>
                                                    <details close>
                                                        <summary>{{$division->division}}</summary>
                                                        <ul>
                                                            @foreach(json_decode($division->districts) as $district)
                                                            <!-- <li>
                                                                <a href="{{url('companies/country')}}">{{ $district }}</a>

                                                            </li> -->
                                                            <form method="GET">
                                                                <li> <button class=" text-black" type="submit" name="district" value="{{ $district }}">{{ $district }}</button></li>
                                                            </form>

                                                            @endforeach

                                                        </ul>
                                                    </details>
                                                </li>
                                            </ul>

                                            @endforeach

                                        </details>
                                    </li>
                                    <li><a>India</a></li>
                                    <li><a>Nepal</a></li>

                                </ul>
                            </details>
                        </li>
                        <li><a href="{{url('/companies/product')}}">Product</a></li>
                        <li><a href="{{url('/members/our-clients')}}">Our Clients</a></li>
                        <li><a href="{{url('/members/our-best-clients')}}">Our Best Clients</a></li>
                        <li><a href="{{url('/members/our-employees')}}">Our Employees</a></li>
                        <li><a href="{{url('/members/our-best-employees')}}">Our Best Employees</a></li>
                        <li><a href="{{url('/members/our-old-clients')}}">Our Old Clients</a></li>
                    </ul>
                </div>
            </li>
            <li class=" {{request()->routeIs('about') ?'p-3 xl:p-6 active' : 'p-3 xl:p-6'}}">
                <a href="{{url('/about')}}">
                    <span>About</span>
                </a>
            </li>

            <li class=" {{request()->routeIs('contact') ?'p-3 xl:p-6 active' : 'p-3 xl:p-6'}}">
                <a href="{{url('/contact')}}">
                    <span>Contacts</span>
                </a>
            </li>

        </ul>
    </nav>

    <nav class="hidden 2xl:contents">
        <ul class="flex items-center mr-4 lg:mr-6 xl:mr-8">
            <li class="p-1">
                <a target="_blank" href="https://www.facebook.com/bprofilebd" class="inline-block rounded-full border hover:shadow-lg hover:border-opacity-0 duration-200 hover:-translate-y-0.5">
                    <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#1877F2" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                    </svg>

                </a>
            </li>
            <li class="p-1">
                <a href="" class="inline-block rounded-full border  hover:shadow-lg hover:border-opacity-0 duration-200 hover:-translate-y-0.5">
                    <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#3b5998" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                    </svg>

                </a>
            </li>
        </ul>
    </nav>

    <div class="border flex items-center gap-5 px-4 lg:px-6 xl:px-8">

        <div class="dropdown dropdown-end">
            <label tabindex="0">
                <svg class="h-6 xl:h-8" aria-hidden="true" focusable="false" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-3x">
                    <path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"></path>
                </svg>
            </label>
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-96">
                <li>

                    <form>
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

                </li>

            </ul>
        </div>




        <div>
            @if($adminData || $empData || $userData)

            @if($adminData)
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="flex items-center  gap-3">

                    <div class="w-10 rounded-full">
                        <img class="w-10 rounded-full" src="{{ $adminData->admin_image }}" />
                    </div>
                    <div>
                        <p class="font-semibold">{{ $adminData->admin_name }}</p>
                        <p class="capitalize text-sm">{{ $adminData->role }}</p>
                    </div>

                </label>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a href="/admin/dashboard" class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a href="{{ url('admin/edit_profile', $adminData->id) }}">Settings</a></li>
                    <li><a href="{{url('/logout')}}">Logout</a></li>
                </ul>
            </div>
            @elseif($empData)
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="flex items-center  gap-3">

                    <div class="w-10 rounded-full">
                        <img class="w-10 rounded-full" src="{{ $empData->emp_image }}" />
                    </div>
                    <div>
                        <p class="font-semibold">{{ $empData->emp_name }}</p>
                        <p class="capitalize text-sm">{{ $empData->emp_role }}</p>
                    </div>

                </label>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a href="/employee/dashboard" class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a href="{{ url('edit_empInfo_profile', $empData->id) }}">Settings</a></li>
                    <li><a href="{{url('/empLogout')}}">Logout</a></li>
                </ul>
            </div>
            @elseif($userData)
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="flex items-center  gap-3">

                    <div class="w-10 rounded-full">
                        <img class="w-10 rounded-full" src="{{ $userData->owner_image }}" />
                    </div>
                    <div>
                        <p class="font-semibold">{{ $userData->owner_name }}</p>
                        <p class="capitalize text-sm">{{ $userData->owner_role }}</p>
                    </div>

                </label>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a href="/user/dashboard" class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a href="{{ url('user/edit_userInfo_profile', $userData->id) }}">Settings</a></li>
                    <li><a href="{{url('/user/userLogout')}}">Logout</a></li>
                </ul>
            </div>
            @endif

            @else
            <button class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="button" data-te-ripple-init data-te-ripple-color="light" style="background-color: #282560;">
                <a href="/login" style="text-decoration: none; color: white;">Login</a>
            </button>
            @endif
        </div>

    </div>
</header>