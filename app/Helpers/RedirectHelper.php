<?php
// namespace App\Helpers;
// // app/Helpers/RedirectHelper.php

// use Illuminate\Support\Facades\Redirect;

// if (!function_exists('redirectAfterLogin')) {
//     function redirectAfterLogin($result)
//     {
//         if ($result->isAdmin()) {
//             return Redirect::route('admin.dashboard'); // Redirect to admin dashboard
//         } else {
//             return Redirect::route('user.dashboard'); // Redirect to user dashboard
//         }
//     }
// }




// RedirectHelper.php

namespace App\Helpers;

use Illuminate\Support\Facades\Redirect;

if (!function_exists('redirectAfterLogin')) {
    function redirectAfterLogin($result)
    {
        if ($result->isAdmin()) {
            return Redirect::route('admin.dashboard'); // Redirect to admin dashboard
        } else {
            return Redirect::route('user.dashboard'); // Redirect to user dashboard
        }
    }
}
