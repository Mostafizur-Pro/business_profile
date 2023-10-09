<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Include your external CSS libraries if needed -->
     <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>



<div>
    <div class="py-4 px-8 flex justify-between items-center">
        <div class="header-option">
            <div class="logo-back">
                <a href="{{ url('/') }}">
                    <img class=" w-44 h-auto" src="/images/business profile.png" alt="Business Profile">
                </a>
            </div>
        </div>
        <div>
      

            <div class="navbar-start">
                <div class="dropdown">
              
                    <a href="#" class="btn btn-primary hover:bg-primary-700">
                        <span class="">Login</span>
                    </a>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="/admin">Admin Login</a></li>
                        <li><a href="/empLogin">Employee Login</a></li>
                        <li><a href="/userLogin">User Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>