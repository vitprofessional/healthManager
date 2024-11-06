<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DistrictManager;
use App\Http\Controllers\DivisionManager;
use App\Http\Controllers\ThanaManager;
use App\Http\Controllers\UpManager;
use App\Http\Controllers\SuperAdminPanel;

Route::get('/', function () {
    return view('welcome');
});

// Super Admin Routes
Route::get('/admin/home',[
    SuperAdminPanel::class,
    'index'
])->name('adminHome');

Route::get('/admin/customer',[
    SuperAdminPanel::class,
    'customer'
])->name('customerList');

Route::get('/admin/new/customer/create',[
    SuperAdminPanel::class,
    'newCustomer'
])->name('newCustomer');

Route::get('/admin/list/allAdmin',[
    SuperAdminPanel::class,
    'adminList'
])->name('adminList');

Route::get('/admin/new/admin/create',[
    SuperAdminPanel::class,
    'newAdmin'
])->name('newAdmin');

Route::get('/admin/admin/create/confirm',[
    SuperAdminPanel::class,
    'confirmAdminSignup'
])->name('confirmAdminSignup');

Route::get('/admin/kyc/report',[
    SuperAdminPanel::class,
    'kycReport'
])->name('kycReport');

Route::get('/admin/settings/activation/charge',[
    SuperAdminPanel::class,
    'activationCharge'
])->name('activationCharge');

Route::get('/admin/profile',[
    SuperAdminPanel::class,
    'adminProfile'
])->name('adminProfile');
