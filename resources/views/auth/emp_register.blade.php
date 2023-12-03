<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Register</title>

    <!-- Include your external CSS libraries if needed -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>



</head>

<body class="bg-gray-200 min-h-screen">
    <header>
        <div class="header-part py-4 px-8 flex justify-between items-center">
            <div class="header-option">
                <div class="logo-back">
                    <a href="{{ url('/') }}">
                        <img class="company-logo w-44 h-auto" src="/assets/logo/logo.png" alt="Business Profile">
                    </a>
                </div>
            </div>
            <div>
                <button class="bg-[#282560]  w-full rounded px-6 pb-2 pt-2.5 text-md font-medium leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="button" data-te-ripple-init data-te-ripple-color="light">
                    <a href="/login">Login</a>
                </button>
            </div>
        </div>
    </header>





    <div class="flex flex-col md:flex-row justify-center items-center mx-auto">
        <section class="flex flex-col justify-center items-center bg-white p-8 rounded-lg shadow-md md:w-96">
            <form class="bg-white rounded-lg" action="{{ url('registerEmp') }}" method="post">
                @csrf

                <h3 class="text-3xl font-semibold mb-4">Employee Register</h3>


                <div class="mb-4">
                    <input type="text" name="emp_name" required placeholder="Enter your name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                    <span class="text-red-400">@error('emp_name') {{ $message }} @enderror</span>
                </div>

                <!-- Add the number field -->
                <div class="mb-4">
                    <input type="text" name="emp_number" required placeholder="Enter your number" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="11">
                    <span class="text-red-400">@error('emp_number') {{ $message }} @enderror</span>
                </div>

                <div class="mb-4">
                    <select name="emp_role" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <option selected disabled>Select Your Role</option>
                        <option value="Sales and Marketing Office">Sales and Marketing Office</option>
                        <option value="Marketing Officer">Marketing Officer</option>
                        <option value="Sales Officer">Sales Officer</option>
                    </select>
                    <span class="text-red-400">@error('emp_role') {{ $message }} @enderror</span>
                </div>

                <div class="mb-4">
                    <select name="emp_id" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                        <option selected disabled>Select Employee Id</option>
                        @foreach ($nonMatchingData as $empId)
                        @if(is_array($empId))
                        @foreach ($empId as $element)
                        @php
                        $matched = false;
                        @endphp
                        @foreach ($allempId as $empIdAll)
                        @if ($empIdAll === $element)
                        @php
                        $matched = true;
                        break;
                        @endphp
                        @endif
                        @endforeach

                        @if (!$matched)
                        <!-- {{ $element }} -->


                        <option value="{{ $element }}">{{ $element }}</option>


                        @endif
                        @endforeach
                        @else
                        <!-- {{ $empId }} -->
                        @endif
                        @endforeach
                    </select>
                    <span class="text-red-400">@error('emp_role') {{ $message }} @enderror</span>
                </div>
                <div class="mb-4">
                    <input type="text" name="emp_address" required placeholder="Enter your address" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="11">
                    <span class="text-red-400">@error('emp_address') {{ $message }} @enderror</span>
                </div>
                <div class="mb-4">
                    <input type="text" name="emp_nid" required placeholder="Enter your NID" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="11">
                    <span class="text-red-400">@error('emp_nid') {{ $message }} @enderror</span>
                </div>

                <div class="mb-4">
                    <input type="email" name="emp_email" required placeholder="Enter your email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                    <span class="text-red-400">@error('emp_email') {{ $message }} @enderror</span>
                </div>

                <div class="mb-4">
                    <input type="password" name="password" required placeholder="Enter your password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                    <span class="text-red-400">@error('password') {{ $message }} @enderror</span>
                </div>

                <button type="submit" class="bg-[#282560]  w-full rounded px-6 pb-2 pt-2.5 text-md font-medium leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="button" data-te-ripple-init data-te-ripple-color="light">
                    Submit
                </button>
                <p class="mt-5">Already have an account! <a class="text-[#fcae04] font-bold" href="{{url('/login')}}">Please Login</a></p>
                
            </form>
        </section>
        <div class="hidden lg:block">
            <img class="w-4/6" src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" alt="">
        </div>
    </div>
</body>

</html>