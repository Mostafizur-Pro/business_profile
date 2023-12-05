<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminEmpRegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\backend\AdminPackageController;
use App\Http\Controllers\backend\AdminUserInfo;
use App\Http\Controllers\backend\employee\EmployeeDashboardController;
use App\Http\Controllers\backend\user\UserDashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\frontend\CompaniesController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\MembersController;
use App\Http\Controllers\frontend\PackageController;
use App\Http\Controllers\room\RoomController;



Route::get('/', [FrontendHomeController::class, 'home_page'])->name('home');
Route::get('/service', [FrontendHomeController::class, 'service_page'])->name('service');
Route::get('/package', [PackageController::class, 'package_page'])->name('package');
Route::get('/about', [FrontendHomeController::class, 'about_page'])->name('about');
Route::get('/contact', [FrontendHomeController::class, 'contact_page'])->name('contact');


Route::get('/room', [RoomController::class, 'room_page'])->middleware('loginRoom');


// User & Employee Login
// Route::get('/login', [LoginController::class, 'login_page'])->middleware('login');
Route::get('/login', [LoginController::class, 'login_page']);
Route::post('/login', [LoginController::class, 'login']);


// User Registration
Route::get('/register', [RegisterController::class, 'register_page']);
Route::post('/registerUser', [RegisterController::class, 'register_user'])->name('registerUser');

// Admin Login & Registration
Route::get('/admin', [AdminLoginController::class, 'admin_login'])->name('admin')->middleware('allReadyLogin');
Route::post('/admin_login', [AdminLoginController::class, 'login_admin']);
Route::get('/adminRegister', [AdminLoginController::class, 'admin_register'])->name('adminRegister')->middleware('superAdmin');
Route::post('/registerAdmin', [AdminLoginController::class, 'register_admin'])->name('registerAdmin')->middleware('superAdmin');

// Employee Register
Route::get('/empRegister', [AdminEmpRegisterController::class, 'emp_register'])->name('empRegister')->middleware('admin');
Route::post('/registerEmp', [AdminEmpRegisterController::class, 'register_emp'])->name('registerEmp');





Route::group(['prefix' => '/members', 'namespace' => 'members'], function () {
    Route::get('/our-clients', [MembersController::class, 'our_clients']);
    Route::get('/our-old-clients', [MembersController::class, 'our_old_clients']);
    Route::get('/our-employees', [MembersController::class, 'our_employees']);
});

Route::group(['prefix' => '/companies', 'namespace' => 'companies'], function () {
    Route::get('/country', [CompaniesController::class, 'country']);
    Route::get('/product', [CompaniesController::class, 'product']);
});




Route::group(['prefix' => '/employee', 'namespace' => 'employee'], function () {
    Route::get('/dashboard', [EmployeeDashboardController::class, 'emp_dashboard'])->name('empDashboard');
    Route::get('/edit_empInfo_profile/{id}', [EmployeeController::class, 'editEmpProfile'])->name('editEmpInfoProfile');
    Route::put('/updateEmpProfile/{id}', [EmployeeController::class, 'update_Emp_Profile'])->name('updateEmpProfile');
    Route::get('/edit_user_profile/{id}', [EmployeeController::class, 'editUserInfoProfile'])->name('userInfoEditProfile');
    Route::put('/updateUserProfile/{id}', [EmployeeController::class, 'update_user_Profile'])->name('updateUserProfile');
    Route::get('/userInfo_emp', [EmployeeController::class, 'user_info'])->name('userInfo_emp');
    Route::get('/packageItem', [EmployeeDashboardController::class, 'package_List'])->name('packageList');
});



Route::group(['prefix' => '/user', 'namespace' => 'user'], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'user_dashboard'])->name('userDashboard');
    Route::get('/edit_userInfo_profile/{id}', [UserDashboardController::class, 'editUserProfile'])->name('editUserProfile');
    Route::put('/updateUserInfoProfile/{id}', [UserDashboardController::class, 'update_user_Profile'])->name('updateUserInfoProfile');
    Route::get('/userLogout', [UserDashboardController::class, 'logout']);
    Route::get('/packageItem', [UserDashboardController::class, 'package_List']);
});


// Logout
Route::get('/empLogout', [EmployeeController::class, 'logout']);



require_once __DIR__ . '/admin.php';



// Logout
Route::get('/logout', [AdminLoginController::class, 'logout']);



Route::put('/updateAdminProfile/{id}', [AdminController::class, 'update_Admin_Profile'])->name('updateAdminProfile');

Route::delete('/deleteAdmin/{id}', [AdminController::class, 'delete_admin'])->name('deleteAdmin');



// Delete Dashboard
Route::delete('/deleteUserInfo/{id}', [AdminUserInfo::class, 'delete_userInfo'])->name('deleteUserInfo');
Route::delete('/deleteUserInfoPermanent/{id}', [AdminController::class, 'delete_userInfo_per'])->name('deleteUserInfoPermanent');
Route::get('/deleteUserInfo', [AdminController::class, 'delete_user_info'])->name('deleteUserInfo')->middleware('superAdmin');
Route::get('/reverse_userInfo_profile/{id}', [AdminController::class, 'reverseUserInfoProfile'])->name('reverseUserInfoProfile');

// Pending
Route::get('/pendingUserInfo', [AdminController::class, 'pending_user_info'])->name('pendingUserInfo')->middleware('superAdmin');
Route::get('/edit_pendingUserInfo_profile/{id}', [AdminController::class, 'editPendingUserInfoProfile'])->name('pendingUserInfoEditProfile');
Route::put('/confirm_pendingUserInfo_profile/{id}', [AdminController::class, 'confirm_PendingUserInfoProfile_Profile'])->name('confirmPendingUserInfoProfile');
Route::put('/updatePendingUserInfoProfile/{id}', [AdminController::class, 'update_PendingUserInfoProfile_Profile'])->name('updatePendingUserInfoProfile');

// Admin Role
Route::post('/makeSuperAdmin/{id}', [AdminController::class, 'makeSuperAdmin'])->name('makeSuperAdmin');
Route::post('/makeAdmin/{id}', [AdminController::class, 'makeAdmin'])->name('makeAdmin');



Route::post('/savePack', [AdminPackageController::class, 'store_package'])->name('savePack');
