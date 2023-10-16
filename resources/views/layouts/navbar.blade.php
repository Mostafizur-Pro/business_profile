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
            <div class=" mx-auto">
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
                        <a class="ml-2">
                            <div class="relative inline-block dropdown dropdown-hover">
                                <button class="dropdown-toggle">Products</button>
                                <ul class="dropdown-content z-[1] menu text-xl shadow-md border border-gray-300">
                                    <li><a href="#" class="block px-4 py-2 text-gray-700">Agro Products & Services</a></li>
                                    <li><a href="#" class="block px-4 py-2 text-gray-700">Book, Stationery & Paper</a></li>
                                    <li><a href="#" class="block px-4 py-2 text-gray-700">Business Houses & Services</a></li>
                                    <li><a href="#" class="block px-4 py-2 text-gray-700">Construct Material, Hardware</a></li>
                                    <li><a href="#" class="block px-4 py-2 text-gray-700">Chemical, Oil & Gas</a></li>
                                    <li><a href="#" class="block px-4 py-2 text-gray-700">Electrical Equipment</a></li>
                                    <li><a href="#" class="block px-4 py-2 text-gray-700">Education, Career, Culture</a></li>
                                    <li><a href="#" class="block px-4 py-2 text-gray-700">Electronic & Automobile</a></li>
                                    <li><a href="#" class="block px-4 py-2 text-gray-700">Food, Fashion & Greetings</a></li>
                                    <li><a href="#" class="block px-4 py-2 text-gray-700">Furniture & Decoration</a></li>
                                </ul>
                            </div>
                        </a>



                        <a href="#" class="text-gray-700">FAQ</a>
                        <div x-data="{ open: false }" @click.away="open = false">
                            <a href="#" class="text-gray-700" @click="open = !open">Companies</a>
                            <div x-show="open" class="absolute mt-2 space-y-2 py-2 bg-white border border-gray-300 rounded-lg">
                                <a href="#" class=" px-4 py-2 text-gray-700">Apple</a>
                                <a href="#" class=" px-4 py-2 text-gray-700">Asus</a>
                                <a href="#" class=" px-4 py-2 text-gray-700">Bkash</a>
                                <a href="#" class=" px-4 py-2 text-gray-700">Berger</a>
                                <a href="#" class=" px-4 py-2 text-gray-700">Capstone</a>
                                <a href="#" class=" px-4 py-2 text-gray-700">Dell</a>
                                <a href="#" class=" px-4 py-2 text-gray-700">Moontoon</a>
                            </div>
                        </div>
                        <a href="{{url('/clients')}}" class="text-gray-700">Our Clients</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>