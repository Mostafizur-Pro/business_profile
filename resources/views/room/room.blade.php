<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Tailwind CSS and DaisyUI -->
<link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


<body>


<div class="grid grid-cols-4 gap-10">
    <div class="col-span-1">
        @include('components/room/left')
    </div>
    <div class="col-span-2">Middle Point</div>
    <div class="col-span-1">right Side</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    
</body>
</html>