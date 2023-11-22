<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>


    <!-- Include your external CSS libraries if needed -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="grid grid-cols-4 gap-5">

        <div class=" md:col-span-1">
        @include('layouts.userDashboardLayout.side')
        </div>

        <div class="sm:col-span-4 md:col-span-3">
        @include('layouts.userDashboardLayout.top')
            @yield('userDashboard')
        </div>

    </div>






</body>

</html>