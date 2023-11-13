<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
</head>


<!-- <link rel="stylesheet" href="/asset/nav.css"> -->

<!-- Tailwind CSS and DaisyUI -->
<link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


<body>
    <div  class="max-w-screen-2xl mx-auto">
        @include('layouts/share/navbar')
        @yield('content')

        @include('layouts/share/footer')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <!-- <script src="/public/asset/nav.js"></script> -->


</body>

</html>