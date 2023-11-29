<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\backend\AdminEmployeeController;
use App\Http\Controllers\backend\AdminOldUserInfo;
use App\Http\Controllers\backend\AdminPackageController;
use App\Http\Controllers\backend\AdminUserInfo;
use Illuminate\Support\Facades\Route;





    Route::group(['prefix' => '/admin', 'namespace' => 'admin'], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'admin_dashboard'])->name('adminDashboard');
        // profile
        Route::get('/profile', [AdminDashboardController::class, 'admin_profile'])->name('adminProfile');
        Route::get('/edit_profile/{id}', [AdminController::class, 'editAdminProfile'])->name('adminEditProfile');
        // admin
        Route::get('/adminInfo', [AdminController::class, 'admin_info'])->name('adminInfo')->middleware('superAdmin');
    
    
        // User Information
        Route::get('/userInfo', [AdminUserInfo::class, 'user_info'])->name('userInfo');
        Route::get('/edit_userInfo_profile/{id}', [AdminUserInfo::class, 'editUserInfoProfile'])->name('userInfoEditProfile');
        Route::put('/updateUserInfo/{id}', [AdminUserInfo::class, 'update_UserInfo']);
    
        
        // User Information Old
        Route::get('/userInfoOld', [AdminOldUserInfo::class, 'user_info_old'])->name('userInfoOld');
        Route::get('/edit_userInfoOld_profile/{id}', [AdminOldUserInfo::class, 'editUserInfoOldProfile'])->name('editUserInfoOldProfile');
        Route::put('/updateUserInfoOldProfile/{id}', [AdminOldUserInfo::class, 'update_UserInfoOld_Profile'])->name('updateUserInfoOldProfile');
    
    
        // Emp Information
        Route::get('/empInfo', [AdminEmployeeController::class, 'emp_info'])->name('empInfo');
        Route::get('/edit_emp_profile/{id}', [AdminEmployeeController::class, 'editEmpProfile'])->name('empEditProfile');
        Route::put('/updateEmpInfoProfile/{id}', [AdminEmployeeController::class, 'update_Emp_Profile'])->name('updateEmpInfoProfile');
        Route::delete('/deleteEmpInfo/{id}', [AdminEmployeeController::class, 'delete_empInfo'])->name('deleteEmpInfo');

        Route::get('/packageItem', [AdminPackageController::class, 'package_List'])->name('packageList');
        Route::get('/addPackageItem', [AdminPackageController::class, 'add_package_List'])->name('addPackageList');
        Route::post('/store_product', [AdminPackageController::class, 'store'])->name('store_product');

        
        

    });


