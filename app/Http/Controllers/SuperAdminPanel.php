<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminList;
use App\Models\CardList;
use App\Models\UserList;
use App\Models\CardCharge;
use Hash;

class SuperAdminPanel extends Controller
{
    public function index(){
        return view('admin.home');
    }

    // admin user controller
    public function newAdmin(){
        return view('admin.adminCreation');
    }

    public function adminList(){
        $adminList = AdminList::orderBy('id','DESC')->get();
        return view('admin.adminList',['adminList'=>$adminList]);
    }

    public function confirmAdminSignup(Request $requ){
        $chk = AdminList::where(['userId'=>$requ->userId])->first();
        $hashPass ="";
        // check if user already exist
        if(!empty($chk)):
            return back()->with('error','Admin profile already exist(userId)');
        endif;
        // check if password match
        if($requ->password != $requ->confirmPass):
            return back()->with('error','Password does not match with confirm password');
        else:
            // password hashing
            $hashPass = Hash::make($requ->password);
        endif;

        $admin = new AdminList();

        $admin->fullName    = $requ->fullName;
        $admin->userId      = $requ->userId;
        $admin->adminType   = $requ->category;
        $admin->adminRule   = $requ->adminRule;
        $admin->password    = $hashPass;
        $admin->status      = "Active";
        if($admin->save()):
            return back()->with('success','Admin profile created successfully');
        else:
            return back()->with('error','Admin profile creation failed');
        endif;
    }

    public function editAdmin($id){
        $adminData = AdminList::find($id);
        return view('admin.editAdminProfile',['admin'=>$adminData]);
    }
    
    
    // general user controller
    public function createGeneralUser(){
        return view('admin.generalUserCreate');
    }

    public function userList(){
        $adminList = AdminList::orderBy('id','DESC')->get();
        return view('admin.adminList',['adminList'=>$adminList]);
    }

    public function confirmGeneralUser(Request $requ){
        $chk = AdminList::where(['userId'=>$requ->userId])->first();
        $hashPass ="";
        // check if user already exist
        if(!empty($chk)):
            return back()->with('error','Admin profile already exist(userId)');
        endif;
        // check if password match
        if($requ->password != $requ->confirmPass):
            return back()->with('error','Password does not match with confirm password');
        else:
            // password hashing
            $hashPass = Hash::make($requ->password);
        endif;

        $admin = new AdminList();

        $admin->fullName    = $requ->fullName;
        $admin->userId      = $requ->userId;
        $admin->adminType   = $requ->category;
        $admin->adminRule   = $requ->adminRule;
        $admin->password    = $hashPass;
        $admin->status      = "Active";
        if($admin->save()):
            return back()->with('success','User profile created successfully');
        else:
            return back()->with('error','User profile creation failed');
        endif;
    }

    public function editUser($id){
        $userData = UserList::find($id);
        return view('admin.editUserProfile',['user'=>$userData]);
    }
}
