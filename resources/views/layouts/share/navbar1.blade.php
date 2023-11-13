<!-- Part 2 -->
<div class="navbar bg-base-300 py-0">
  <!-- start -->
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Item 1</a></li>


        <li>
          <a>Parent</a>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </li>
        <li><a>Item 3</a></li>
      </ul>
    </div>
    <!-- <a class="btn btn-ghost text-xl">daisyUI</a> -->
    <div>
      <a href="{{url('/')}}">
        <img class="w-60" src="/images/business profile.png" alt="Business Profile">
      </a>
    </div>
  </div>
  <!-- middle -->
  <div class="btn">All Ads</div>

  <!-- end -->
  <div class="flex justify-end flex-1">
    <div class="flex gap-2 navbar-end">
      <!-- Start Search Section -->
      <div class="form-control">
        <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
      </div>
      <!--End Search Section -->
      <!--Start Profile Section -->
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img alt="Tailwind CSS Navbar component" src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
          </div>
        </label>
        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
          <li>
            <a class="justify-between">
              Profile
              <span class="badge">New</span>
            </a>
          </li>
          <li><a>Settings</a></li>
          <li><a>Logout</a></li>
        </ul>
      </div>
      <!--End Profile Section -->
      <!-- <a href="{{url('login')}}">Login</a> -->
      <div class="login-section mr-5">
        <div x-data="{ open: false }">
          <button @click="open = !open" class="button">
            <div class="float-right mr-5 btn bg-white">
              Login
            </div>
          </button>

          <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 bg-white border border-gray-300 rounded-md shadow-md">
            <a href="{{ url('/userLogin') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" type="button">User Login</a>
            <a href="{{ url('/empLogin') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" type="button">Employee Login</a>
            <!-- <a href="{{ url('/admin') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" type="button">Admin</a> -->
          </div>
        </div>
      </div>


    </div>
  </div>

</div>

<!-- Part 2 -->






<div class="bg-base-300 -mt-5">
  <div class="navbar hidden lg:flex justify-center gap-3 py-0">
    <a class="">Home</a>
    <a class="">Service</a>
    <a class="">Package</a>
    <div class="dropdown dropdown-start">
      <label tabindex="0" class="">Companies</label>
      <ul tabindex="0" class="menu dropdown-content z-[1] p-2 shadow bg-base-300 rounded-box w-52 mt-4">
        <li><a>Country</a></li>
        <li><a>Product</a></li>
      </ul>
    </div>
    <div class="dropdown dropdown-start">
      <label tabindex="0" class="">Members</label>
      <ul tabindex="0" class="menu dropdown-content z-[1] p-2 shadow bg-base-300 rounded-box w-52 mt-4">
        <li><a>Our Clients</a></li>
        <li><a>Our Employees</a></li>
      </ul>
    </div>

    <a class="">About</a>
    <a class="">Contact</a>


  </div>
</div>


