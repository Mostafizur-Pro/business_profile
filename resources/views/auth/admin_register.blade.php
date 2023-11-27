<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>

    <!-- Include your external CSS libraries if needed -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .login-container {
            position: relative;
            width: 22.2rem;
        }

        .form-container {
            border: 1px solid hsla(0, 0%, 65%, 0.158);
            box-shadow: 0 0 36px 1px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            backdrop-filter: blur(20px);
            z-index: 99;
            padding: 2rem;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
        }

        .login-container form input {
            display: block;
            padding: 14.5px;
            width: 100%;
            margin: 2rem 0;
            color: var(--color);
            outline: none;
            background-color: #9191911f;
            border: none;
            border-radius: 5px;
            font-weight: 500;
            letter-spacing: 0.8px;
            font-size: 15px;
            backdrop-filter: blur(15px);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
        }

        .login-container form input:focus {
            box-shadow: 0 0 16px 1px rgba(0, 0, 0, 0.2);
            animation: wobble 0.3s ease-in;
            -webkit-animation: wobble 0.3s ease-in;
        }

        .login-container form button {
            background-color: var(--primary-color);
            color: var(--color);
            display: block;
            padding: 13px;
            border-radius: 5px;
            outline: none;
            font-size: 18px;
            letter-spacing: 1.5px;
            font-weight: bold;
            width: 100%;
            cursor: pointer;
            margin-bottom: 2rem;
            transition: all 0.1s ease-in-out;
            border: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            -webkit-transition: all 0.1s ease-in-out;
            -moz-transition: all 0.1s ease-in-out;
            -ms-transition: all 0.1s ease-in-out;
            -o-transition: all 0.1s ease-in-out;
        }

        .login-container form button:hover {
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.15);
            transform: scale(1.02);
            -webkit-transform: scale(1.02);
            -moz-transform: scale(1.02);
            -ms-transform: scale(1.02);
            -o-transform: scale(1.02);
        }

        .circle {
            width: 8rem;
            height: 8rem;
            background: var(--primary-color);
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            position: absolute;
        }

        .illustration {
            position: absolute;
            top: -14%;
            right: -2px;
            width: 90%;
        }

        .circle-one {
            top: 0;
            left: 0;
            z-index: -1;
            transform: translate(-45%, -45%);
            -webkit-transform: translate(-45%, -45%);
            -moz-transform: translate(-45%, -45%);
            -ms-transform: translate(-45%, -45%);
            -o-transform: translate(-45%, -45%);
        }

        .circle-two {
            bottom: 0;
            right: 0;
            z-index: -1;
            transform: translate(45%, 45%);
            -webkit-transform: translate(45%, 45%);
            -moz-transform: translate(45%, 45%);
            -ms-transform: translate(45%, 45%);
            -o-transform: translate(45%, 45%);
        }

        .register-forget {
            margin: 1rem 0;
            display: flex;
            justify-content: space-between;
        }

        .opacity {
            opacity: 0.6;
        }

        .theme-btn-container {
            position: absolute;
            left: 0;
            bottom: 2rem;
        }

        .theme-btn {
            cursor: pointer;
            transition: all 0.3s ease-in;
        }

        .theme-btn:hover {
            width: 40px !important;
        }

        @keyframes wobble {
            0% {
                transform: scale(1.025);
                -webkit-transform: scale(1.025);
                -moz-transform: scale(1.025);
                -ms-transform: scale(1.025);
                -o-transform: scale(1.025);
            }

            25% {
                transform: scale(1);
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
            }

            75% {
                transform: scale(1.025);
                -webkit-transform: scale(1.025);
                -moz-transform: scale(1.025);
                -ms-transform: scale(1.025);
                -o-transform: scale(1.025);
            }

            100% {
                transform: scale(1);
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
            }
        }
    </style>
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
                <a href="{{url('/admin')}}" class="btn btn-primary hover:bg-primary-700">
                    <span>Login</span>
                </a>
            </div>
        </div>
    </header>
    <!-- <section class="flex justify-center items-center min-h-screen">
        <form class="bg-white p-8 rounded-lg shadow-md w-96" action="{{ url('registerAdmin') }}" method="post">
            @csrf

            <h3 class="text-3xl font-semibold mb-4">Admin Register </h3>

            <div class="mb-4">
                <input type="text" name="admin_name" required placeholder="Enter your name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                <span class="text-red-400 ">@error('admin_name') {{$message}} @endError</span>
            </div>

            
            <div class="mb-4">
                <input type="text" name="number" required placeholder="Enter your number" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="11">
                <span class="text-red-400 ">@error('number') {{$message}} @endError</span>
            </div>

            <div class="mb-4">
                <select name="role" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    <option selected disabled>Select Your Role</option>
                    <option value="admin">Admin</option>
                    <option value="superAdmin">Super Admin</option>
                </select>
            </div>

            <div class="mb-4">
                <input type="email" name="admin_email" required placeholder="Enter your email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                <span class="text-red-400 ">@error('admin_email') {{$message}} @endError</span>
            </div>

            <div class="mb-4">
                <input type="password" name="password" required placeholder="Enter your password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                <span class="text-red-400 ">@error('password') {{$message}} @endError</span>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white rounded-md py-2 hover:bg-blue-600 transition duration-300">Submit</button>
            <p class="mt-5">Already have an account ! <a class="text-blue-500 font-bold " href="{{url('/admin')}}">Please Login</a></p>
        </form>


    </section> -->


    <section class="flex justify-center items-center min-h-screen">
        <div class="login-container">
            <div class=" "></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                <h1 class="text-3xl font-semibold mb-4">LOGIN</h1>
                <form action="{{ url('registerAdmin') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="admin_name" required placeholder="Enter your name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                        <span class="text-red-400 ">@error('admin_name') {{$message}} @endError</span>
                    </div>


                    <div class="mb-4">
                        <input type="text" name="number" required placeholder="Enter your number" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="11">
                        <span class="text-red-400 ">@error('number') {{$message}} @endError</span>
                    </div>

                    <div class="mb-4">
                        <select name="role" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                            <option selected disabled>Select Your Role</option>
                            <option value="admin">Admin</option>
                            <option value="superAdmin">Super Admin</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <input type="email" name="admin_email" required placeholder="Enter your email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                        <span class="text-red-400 ">@error('admin_email') {{$message}} @endError</span>
                    </div>

                    <div class="mb-4">
                        <input type="password" name="password" required placeholder="Enter your password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" maxlength="50">
                        <span class="text-red-400 ">@error('password') {{$message}} @endError</span>
                    </div>
                    <!-- <input type="text" placeholder="USERNAME" />
                    <input type="password" placeholder="PASSWORD" /> -->
                    <button class="opacity">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <a class="font-semibold" href="{{ url('/admin') }}">LOGIN</a>
                    <a href="">FORGOT PASSWORD</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>

</body>

</html>