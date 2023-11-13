<div class="">
    <div class="bg-gray-100 py-4">
        <div class=" mx-auto flex justify-between items-center">
            <div class="">
                <div class="">
                    <a href="{{url('/')}}">
                        <img class="company-logo w-44 ml-10" src="/images/business profile.png" alt="Business Profile">
                    </a>
                </div>
            </div>
            <div class="">
                <form action="{{url('/userLogin')}}" method="get" autocomplete="off">
                    <button class="btn btn-primary">
                        <span>LogIn</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="">
        <nav class="bg-white shadow-lg">
            <div class="mx-auto">
                <div class="flex items-center justify-between p-4">
                    <button class="lg:hidden text-gray-700 focus:outline-none" @click="open = !open">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <div class="hidden lg:flex space-x-4">
                        <a href="/" class="text-gray-700">Home</a>
                        <a href="/about" class="text-gray-700">About</a>
                        <a href="{{url('/package')}}" class="text-gray-700">Our Services</a>

                        <!-- Products Dropdown -->
                        <div class="relative inline-block group">
                            <button class="text-gray-700 group-hover:text-gray-900">Products</button>
                            <div class="hidden group-hover:block absolute space-y-2 bg-white border border-gray-300 rounded-lg">
                                <a href="#" class="block px-4 py-2 text-gray-700">Agro Products & Services</a>
                                <a href="#" class="block px-4 py-2 text-gray-700">Book, Stationery & Paper</a>
                                <a href="#" class="block px-4 py-2 text-gray-700">Business Houses & Services</a>
                                <!-- Add more product categories as needed -->
                            </div>
                        </div>


                        <!-- Companies Dropdown -->
                        <div class="relative inline-block group">
                            <button class="text-gray-700 group-hover:text-gray-900">Companies</button>
                            <ul class="hidden group-hover:block absolute  space-y-2  bg-white border border-gray-300 rounded-lg">
                                <li><a href="#" class="block px-4 py-2 text-gray-700">Apple</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700">Asus</a></li>
                                <li><a href="#" class="block px-4 py-2 text-gray-700">Bkash</a></li>
                                <!-- Add more company names as needed -->
                            </ul>
                        </div>


                        <a href="#" class="text-gray-700">FAQ</a>
                        <a href="{{url('/clients')}}" class="text-gray-700">Our Clients</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</div>