<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DistrictManager;
use App\Http\Controllers\DivisionManager;
use App\Http\Controllers\ThanaManager;
use App\Http\Controllers\UpManager;
use App\Http\Controllers\SuperAdminPanel;
use App\Http\Controllers\FrontPanel;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login',[
    FrontPanel::class,
    'adminLogin'
])->name('adminLogin');

Route::post('/auth/login/confirm',[
    FrontPanel::class,
    'confirmAdminLogin'
])->name('confirmAdminLogin');

Route::middleware(['divisionAdmin','districtAdmin','thanaAdmin','unionAdmin','superAdmin'])->group(function(){
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

    Route::get('/admin/password/change/{id}',[
        SuperAdminPanel::class,
        'changeAdminPass'
    ])->name('changeAdminPass');

    Route::post('/admin/password/update',[
        SuperAdminPanel::class,
        'updateAdminPass'
    ])->name('updateAdminPass');

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
        'updateGeneralUser'
    ])->name('updateGeneralUser');

    Route::get('/admin/user/pin/change/{id}',[
        SuperAdminPanel::class,
        'changeUserPin'
    ])->name('changeUserPin');

    Route::post('/admin/user/pin/update',[
        SuperAdminPanel::class,
        'updateUserPin'
    ])->name('updateUserPin');

    // card route declaration
    Route::get('/admin/card/list',[
        SuperAdminPanel::class,
        'cardList'
    ])->name('cardList');

    Route::get('/admin/card/new',[
        SuperAdminPanel::class,
        'newCard'
    ])->name('newCard');

    Route::post('/admin/card/save',[
        SuperAdminPanel::class,
        'saveCard'
    ])->name('saveCard');

    Route::get('/admin/card/edit/{id}',[
        SuperAdminPanel::class,
        'editCard'
    ])->name('editCard');

    Route::post('/admin/card/update',[
        SuperAdminPanel::class,
        'updateCard'
    ])->name('updateCard');

    Route::get('/admin/card/charge/settings',[
        SuperAdminPanel::class,
        'activationCharge'
    ])->name('activationCharge');

    Route::post('/admin/card/charge/save',[
        SuperAdminPanel::class,
        'saveCharge'
    ])->name('saveCharge');

    // all reports route declaration
    Route::get('/admin/kyc/report',[
        SuperAdminPanel::class,
        'kycReport'
    ])->name('kycReport');

    Route::get('/admin/profile',[
        SuperAdminPanel::class,
        'myProfile'
    ])->name('myProfile');

    Route::post('/admin/profile/update',[
        SuperAdminPanel::class,
        'updateMyProfile'
    ])->name('updateMyProfile');

    Route::get('/admin/profile/password',[
        SuperAdminPanel::class,
        'changeMyPass'
    ])->name('changeMyPass');

    Route::post('/admin/profile/password/update',[
        SuperAdminPanel::class,
        'updateMyPass'
    ])->name('updateMyPass');
});