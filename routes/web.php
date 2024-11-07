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

// admin routes declaration
Route::get('/admin/list/allAdmin',[
    SuperAdminPanel::class,
    'adminList'
])->name('adminList');

Route::get('/admin/new/create',[
    SuperAdminPanel::class,
    'newAdmin'
])->name('newAdmin');

Route::post('/admin/new/create/confirm',[
    SuperAdminPanel::class,
    'confirmAdminSignup'
])->name('confirmAdminSignup');

Route::get('/admin/edit/{id}',[
    SuperAdminPanel::class,
    'editAdmin'
])->name('editAdmin');

Route::post('/admin/update',[
    SuperAdminPanel::class,
    'updateAdmin'
])->name('updateAdmin');

// general user routes declaration
Route::get('/admin/user',[
    SuperAdminPanel::class,
    'userList'
])->name('userList');

Route::get('/admin/new/user/create',[
    SuperAdminPanel::class,
    'createGeneralUser'
])->name('createGeneralUser');

Route::post('/admin/user/create/confirm',[
    SuperAdminPanel::class,
    'confirmGeneralUser'
])->name('confirmGeneralUser');

Route::get('/admin/edit/user/{id}',[
    SuperAdminPanel::class,
    'editUser'
])->name('editUser');

Route::post('/admin/update/user',[
    SuperAdminPanel::class,
    'updateGener'
])->name('updateGener');


// all reports route declaration
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
