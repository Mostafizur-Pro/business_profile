<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Room- Business Profile</title>
</head>
<!-- Tailwind CSS and DaisyUI -->
<link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


<body>


@include('layouts/share/roomNavbar')

<div class="grid grid-cols-3 lg:grid-cols-4 gap-10 mt-10">
    <div class="col-span-1 lg:col-span-1">
        @include('components/room/left')
    </div>
    <div class="col-span-2 lg:col-span-2">
        @include('components/room/middle')
    </div>
    <div class="hidden sm:block lg:col-span-1">right Side</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

</body>

</html>