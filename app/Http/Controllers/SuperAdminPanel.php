<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminPanel extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function newAdmin(){
        return view('admin.adminCreation');
    }

    public function confirmAdminSignup(){
        return "";
    }
}
