<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\MembersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/login', [HomeController::class, 'login_page']);
// Route::get('/registration', [HomeController::class, 'registration_page']);
// Route::get('/dashboard', [HomeController::class, 'user_dashboard']);
// Route::get('/package', [HomeController::class, 'package']);
// Route::get('/signup', [HomeController::class, 'signup']);
// Route::get('/empDashboard', [HomeController::class, 'employee_dashboard']);
// Route::get('/AccRegistration', [HomeController::class, 'employee_user_registration']);
// Route::get('/user_profile', [HomeController::class, 'user_profile']);
// Route::get('/user_card', [HomeController::class, 'user_card']);
// Route::get('/changePassword', [HomeController::class, 'change_password']);

// Route::get('/employee_edit_profile', [HomeController::class, 'employee_edit_profile']);


// Route::post('/user_register_form_action','Mybdjobscontroller@kazkormouserform');
// Route::post('/user_register_form_action', [HomeController::class, 'registration_form_action']);
// Route::post('/employee_register_form_action', [HomeController::class, 'employee_registration_form_action']);
// Route::post('/login_from_action','Mybdjobscontroller@kazkormologinform');
// Route::post('/login_from_action', [HomeController::class, 'login_form_action']);
// Route::post('/password_form_action', [HomeController::class, 'password_form_action']);


//Payment Interface
// Route::get('/payment', [UserController::class, 'payment_method']);



// admin route

// Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard']);
// Route::get('/admin', [AdminController::class, 'admin_login']);
// Route::get('/logout', [AdminController::class, 'logout']);
// Route::get('/employee_list', [AdminController::class, 'employee_list']);
// Route::get('/edit/{id}', [AdminController::class, 'edit']);
// Route::get('/delete/{id}', [AdminController::class, 'delete_profile']);
// Route::get('/packageList', [AdminController::class, 'package_list']);
// Route::get('/packageAdd', [AdminController::class, 'package_add']);
// Route::get('/pending_list', [AdminController::class, 'pending_list']);
// Route::get('/packagedelete/{id}', [AdminController::class, 'delete_package']);



// Route::post('/admin_login', [AdminController::class, 'login_form_action']);
// Route::post('/update-data/{id}', [AdminController::class, 'update']);
// Route::post('/create_package', [AdminController::class, 'create_package']);






//editor routes
// Route::get('/editor_dashboard', [EditorController::class, 'editor_dashboard']);
// Route::get('/editor_edit/{id}', [EditorController::class, 'edit']);
// Route::get('/editor_packageList', [EditorController::class, 'package_list']);
// Route::get('/editor_packageAdd', [EditorController::class, 'package_add']);
// Route::get('/editor_delete_package/{id}', [AdminController::class, 'editor_delete_package']);


// Route::post('/editor_create_package', [EditorController::class, 'editor_create_package']);
// Route::post('/editor_update_request/{id}', [EditorController::class, 'update_request']);




Route::get('/', [FrontendHomeController::class, 'home_page']);
Route::get('/package', [FrontendHomeController::class, 'package_page']);
Route::get('/service', [FrontendHomeController::class, 'service_page']);
Route::get('/about', [FrontendHomeController::class, 'about_page']);
Route::get('/contact', [FrontendHomeController::class, 'contact_page']);



Route::group(['prefix' => '/members', 'namespace' => 'members'], function () {
    Route::get('/our-clients', [MembersController::class, 'our_clients']);
    Route::get('/our-old-clients', [MembersController::class, 'our_old_clients']);
    Route::get('/our-employees', [MembersController::class, 'our_employees']); 
});









// ---------- Admin Route ----------
// ---------- Rafi Route ----------

// Login
Route::get('/admin', [AdminController::class, 'admin_login'])->name('admin')->middleware('allReadyLogin');
Route::post('/admin_login', [AdminController::class, 'login_admin']);

// Register
Route::get('/adminRegister', [AdminController::class, 'admin_register'])->name('adminRegister')->middleware('superAdmin');
Route::post('/registerAdmin', [AdminController::class, 'register_admin'])->name('registerAdmin')->middleware('superAdmin');

// Logout
Route::get('/logout', [AdminController::class, 'logout']);

Route::get('/adminDashboard', [AdminController::class, 'admin_dashboard'])->name('adminDashboard');
Route::get('/edit_admin_profile/{id}', [AdminController::class, 'editAdminProfile'])->name('adminEditProfile');
Route::put('/updateAdminProfile/{id}', [AdminController::class, 'update_Admin_Profile'])->name('updateAdminProfile');

// Route::put('/updateUserInfoProfile/{id}', [AdminController::class, 'update_UserInfoProfile_Profile'])->name('updateUserInfoProfile');

Route::get('/adminInfo', [AdminController::class, 'admin_info'])->name('adminInfo')->middleware('superAdmin');
Route::delete('/deleteAdmin/{id}', [AdminController::class, 'delete_admin'])->name('deleteAdmin');
Route::get('/empInfo', [AdminController::class, 'emp_info'])->name('empInfo');




// User Information
Route::get('/ad_userInfo', [AdminController::class, 'user_info'])->name('userInfo');
Route::get('/ad_edit_userInfo_profile/{id}', [AdminController::class, 'editUserInfoProfile'])->name('userInfoEditProfile');
Route::put('/ad_updateUserInfo/{id}', [AdminController::class, 'update_UserInfo']);
// Route::get('/edit_pendingUserInfo_profile/{id}', [AdminController::class, 'editUserInfoProfile'])->name('userInfoEditProfile');


// Route::post('/ad_userInfo?perPage={id}&page={page}',  [AdminController::class, 'user_info']);

// User Information Old
Route::get('/userInfoOld', [AdminController::class, 'user_info_old'])->name('userInfoOld');
Route::get('/edit_userInfoOld_profile/{id}', [AdminController::class, 'editUserInfoOldProfile'])->name('editUserInfoOldProfile');
Route::put('/updateUserInfoOldProfile/{id}', [AdminController::class, 'update_UserInfoOld_Profile'])->name('updateUserInfoOldProfile');


// Emp Information
Route::put('/updateEmpInfoProfile/{id}', [AdminController::class, 'update_Emp_Profile'])->name('updateEmpInfoProfile');
Route::get('/edit_emp_profile/{id}', [AdminController::class, 'editEmpProfile'])->name('empEditProfile');
Route::delete('/deleteEmpInfo/{id}', [AdminController::class, 'delete_empInfo'])->name('deleteEmpInfo');

// Delete Dashboard
Route::delete('/deleteUserInfo/{id}', [AdminController::class, 'delete_userInfo'])->name('deleteUserInfo');
Route::delete('/deleteUserInfoPermanent/{id}', [AdminController::class, 'delete_userInfo_per'])->name('deleteUserInfoPermanent');
Route::get('/deleteUserInfo', [AdminController::class, 'delete_user_info'])->name('deleteUserInfo')->middleware('superAdmin');
Route::get('/reverse_userInfo_profile/{id}', [AdminController::class, 'reverseUserInfoProfile'])->name('reverseUserInfoProfile');

// Pending
Route::get('/pendingUserInfo', [AdminController::class, 'pending_user_info'])->name('pendingUserInfo')->middleware('superAdmin');
Route::get('/edit_pendingUserInfo_profile/{id}', [AdminController::class, 'editPendingUserInfoProfile'])->name('pendingUserInfoEditProfile');
Route::put('/confirm_pendingUserInfo_profile/{id}', [AdminController::class, 'confirm_PendingUserInfoProfile_Profile'])->name('confirmPendingUserInfoProfile');
Route::put('/updatePendingUserInfoProfile/{id}', [AdminController::class, 'update_PendingUserInfoProfile_Profile'])->name('updatePendingUserInfoProfile');

// Admin Role
Route::post('/makeSuperAdmin/{id}', [AdminController::class, 'makeSuperAdmin' ])->name('makeSuperAdmin');
Route::post('/makeAdmin/{id}', [AdminController::class, 'makeAdmin' ])->name('makeAdmin');





// ---------- Employee Route ----------

// Login
Route::get('/empLogin', [EmployeeController::class, 'emp_login'])->name('empLogin');
Route::post('/empLogin', [EmployeeController::class, 'login_emp']);

// Register
Route::get('/empRegister', [EmployeeController::class, 'emp_register'])->name('empRegister')->middleware('admin');
Route::post('/registerEmp', [EmployeeController::class, 'register_emp'])->name('registerEmp');

// Logout
Route::get('/empLogout', [EmployeeController::class, 'logout']);


Route::get('/empDashboard', [EmployeeController::class, 'emp_dashboard'])->name('empDashboard');

Route::get('/edit_empInfo_profile/{id}', [EmployeeController::class, 'editEmpProfile'])->name('editEmpInfoProfile');
Route::put('/updateEmpProfile/{id}', [EmployeeController::class, 'update_Emp_Profile'])->name('updateEmpProfile');

Route::get('/edit_user_profile/{id}', [EmployeeController::class, 'editUserInfoProfile'])->name('userInfoEditProfile');
Route::put('/updateUserProfile/{id}', [EmployeeController::class, 'update_user_Profile'])->name('updateUserProfile');

Route::get('/userInfo_emp', [EmployeeController::class, 'user_info'])->name('userInfo_emp');
// Route::get('/empLogin', function () {
//     return view('auth/emp_login');
// });





// ---------- User Route ----------

// Login
Route::get('/userLogin', [UserController::class, 'user_login'])->name('userLogin');
Route::post('/userLogin', [UserController::class, 'login_user']);

// Register
Route::get('/userRegister', [UserController::class, 'user_register'])->name('userRegister');
Route::post('/registerUser', [UserController::class, 'register_user'])->name('registerUser');

// Logout
Route::get('/userLogout', [UserController::class, 'logout']);


Route::get('/userDashboard', [UserController::class, 'user_dashboard'])->name('userDashboard');
Route::get('/edit_userInfo_profile/{id}', [UserController::class, 'editUserProfile'])->name('editUserProfile');
Route::put('/updateUserInfoProfile/{id}', [UserController::class, 'update_user_Profile'])->name('updateUserInfoProfile');
// Route::get('/userRegister', function () {
//     return view('auth/user_register');
// });




Route::get('/packageItem', function () {
    return view('dashboard/admin/package');
});


