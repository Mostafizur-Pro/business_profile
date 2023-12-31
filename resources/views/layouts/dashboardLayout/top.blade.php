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
                    <a>DASHBOARDS</a>
                    <ul class="p-2">
                        <li>
                            <a href="/admin/dashboard">
                                <span>Profile</span>
                            </a>
                        </li>
                        @if($adminData->role === 'superAdmin')
                        <li>
                            <a href="/admin/adminInfo">
                                <span>Admin Information</span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="/admin/userInfo">
                                <span>User Information 2024</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/userInfoOld">
                                <span>User Information 2023</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/empInfo">
                                <span>Employee Information</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/packageItem">
                                <span>Package Item</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a> ALERTS</a>
                    <ul class="p-2">
                        <li>
                            <a href="/deleteUserInfo">
                                <div>Delete
                                    @if(count($deleteData) > 0)
                                    <div class="{{ count($deleteData) > 0 ? 'notification' : '' }} absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900"> {{ count($deleteData) }}</div>
                                    @endif
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/pendingUserInfo">
                                <div>Pending
                                    @if(count($pendingData) > 0)
                                    <div class="{{ count($pendingData) > 0 ? 'notification' : '' }} absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900"> {{ count($pendingData) }}</div>
                                    @endif
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a>PAGES</a>
                    <ul class="p-2">
                        <li>
                            <a href="admin/dashboard">
                                <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin/dashboard">
                                <span>Our Service</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin/dashboard">
                                <span>Products</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/logout')}}">LOGOUT</a>
                </li>
            </ul>
        </div>
        <a href="/" class="normal-case text-xl">
            <img src="/assets/logo/logo.png" class="w-44 sm:block md:hidden" alt="main_logo">
        </a>
    </div>
    <div class="navbar-center hidden lg:flex"></div>
    <div class="navbar-end hidden sm:block">
        <div class="flex justify-between">
            <div class="flex items-center gap-5">
                <div class="flex items-center gap-2">
                    <div>
                        <img class="w-10 rounded-full" src="{{ asset($adminData->admin_image) }}" />
                    </div>
                    <div>
                        <p class="font-semibold">{{ $adminData->admin_name }}</p>
                        <p class="capitalize text-sm">{{ $adminData->role }}</p>
                    </div>
                </div>
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="">
                        <a class="text-sm relative py-2.7 pl-4 my-2 flex items-center  font-medium">
                            <div type="button" class="relative inline-flex items-center px-3 text-sm font-medium text-center rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                    <path d="M13.094 2.085l-1.013-.082a1.082 1.082 0 0 0-.161 0l-1.063.087C6.948 2.652 4 6.053 4 10v3.838l-.948 2.846A1 1 0 0 0 4 18h4.5c0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5H20a1 1 0 0 0 .889-1.495L20 13.838V10c0-3.94-2.942-7.34-6.906-7.915zM12 19.5c-.841 0-1.5-.659-1.5-1.5h3c0 .841-.659 1.5-1.5 1.5zM5.388 16l.561-1.684A1.03 1.03 0 0 0 6 14v-4c0-2.959 2.211-5.509 5.08-5.923l.921-.074.868.068C15.794 4.497 18 7.046 18 10v4c0 .107.018.214.052.316l.56 1.684H5.388z" fill="black" />
                                </svg>
                                @if(count($deleteData) > 0 || count($pendingData) > 0 && $adminData->role === 'superAdmin')
                                <div class="{{ count($pendingData) > 0 || count($deleteData) > 0 ? 'notification' : '' }} absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-red-500 rounded-full -top-2 -right-2 dark:border-gray-900">
                                </div>
                                @endif
                            </div>
                        </a>
                    </label>
                    @if($adminData->role === 'superAdmin')
                    <div tabindex="0" class="dropdown-content z-[1] menu p-2 mt-8 shadow-lg bg-white dark:bg-base-900 rounded-lg w-52">
                        <div class="text-xl font-bold">
                            Notifications
                        </div>
                        <hr />
                        @if(count($deleteData) > 0)
                        <a href="/deleteUserInfo" class="block bg-blue-100  text-blue-700 px-4 py-3 rounded-lg mb-2" role="alert">
                            <p class="text-lg font-semibold mb-1">Delete Data Alert</p>
                            <p class="text-sm">You have data marked for deletion.</p>
                        </a>
                        @endif
                        @if(count($pendingData) > 0)
                        <a href="/pendingUserInfo" class="block bg-blue-100  text-blue-700 px-4 py-3 rounded-lg" role="alert">
                            <p class="text-lg font-semibold mb-1">Pending Data Alert</p>
                            <p class="text-sm">You have pending data that requires attention.</p>
                        </a>
                        @endif
                    </div>
                    @endif
                </div>
                <a href="{{url('/logout')}}">
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