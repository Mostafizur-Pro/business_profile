<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>


    <!-- Include your external CSS libraries if needed -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-200 min-h-screen">

    <!-- Error Message -->
    @if(session('Success'))
    <div class="toast toast-top toast-center">
        <div class="alert alert-success">
            <span>{{ session('Success') }} </span>
        </div>
    </div>

    @endif
    <!-- Error Message -->
    @if(session('Fail'))
    <div class="toast toast-top toast-center">
        <div class="alert alert-error">
            <span>{{ session('Fail') }} </span>
        </div>
    </div>

    @endif
    <!-- Error Message -->

    <header>
        <div class="header-part py-4 px-8 flex justify-between items-center">
            <div class="header-option">
                <div class="logo-back">
                    <a href="{{ url('/') }}">
                        <img class="company-logo w-44 h-auto" src="/images/business profile.png" alt="Business Profile">
                    </a>
                </div>
            </div>
            <div>
                <a href="{{url('/adminRegister')}}" class="btn btn-primary hover:bg-primary-700">
                    <span>Register</span>
                </a>
            </div>
        </div>
    </header>
    <section class="flex justify-center items-center min-h-screen">

        <form class="bg-white p-8 rounded-lg shadow-md w-96" action="{{ url('admin_login') }}" method="post">
            @csrf
            <h3 class="text-3xl font-semibold mb-4">Admin Login</h3>

            <div class="mb-4">
                <input type="email" name="admin_email" placeholder="Enter your email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                <span class="text-red-400">@error('admin_email') {{ $message }} @enderror</span>

            </div>

            <div class="mb-4">
                <input type="password" name="password" placeholder="Enter your password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                <span class="text-red-400">@error('password') {{ $message }} @enderror</span>

            </div>



            <button type="submit" class="w-full bg-blue-500 text-white rounded-md py-2 hover:bg-blue-600 transition duration-300">Submit</button>
            <p class="mt-5">Create new Account! <a class="text-blue-500 font-bold" href="{{url('/adminRegister')}}">Please Register</a></p>
        </form>
    </section>


</body>

</html>