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

    public function updateAdmin(Request $requ){
        $admin = AdminList::find($requ->adminId);

        // check if query has data
        if(empty($admin)):
            return back()->with('error','No data found for update');
        endif;

        $admin->fullName    = $requ->fullName;
        $admin->userId      = $requ->userId;
        $admin->adminType   = $requ->category;
        $admin->adminRule   = $requ->adminRule;
        $admin->status      = $requ->status;
        if($admin->save()):
            return back()->with('success','Admin profile updated successfully');
        else:
            return back()->with('error','Admin profile failed to update');
        endif;
    }

    public function changeAdminPass($id){
        $adminData = AdminList::find($id);
        return view('admin.adminPass',['admin'=>$adminData]);
    }

    public function updateAdminPass(Request $requ){
        $admin = AdminList::find($requ->adminId);
        $hashPass ="";
        // check if user already exist
        if(empty($admin)):
            return back()->with('error','No data found for update');
        endif;
        // check if password match
        if($requ->password != $requ->confirmPass):
            return back()->with('error','Password does not match with confirm password');
        else:
            // password hashing
            $hashPass = Hash::make($requ->password);
        endif;

        $admin->password    = $hashPass;

        if($admin->save()):
            return back()->with('success','Admin password changed successfully');
        else:
            return back()->with('error','Password failed to update');
        endif;
    }
    
    
    // general user controller
    public function createGeneralUser(){
        return view('admin.generalUserCreate');
    }

    public function userList(){
        $userList = UserList::orderBy('id','DESC')->get();
        return view('admin.userList',['userList'=>$userList]);
    }

    public function confirmGeneralUser(Request $requ){
        $chk = UserList::where(['email'=>$requ->userId])->first();
        $hashPass ="";
        // check if user already exist
        if(!empty($chk)):
            return back()->with('error','User profile already exist(userId)');
        endif;
        $hashPass = Hash::make($requ->pinNumber);

        $admin = new UserList();

        $admin->fullName    = $requ->fullName;
        $admin->email       = $requ->userId;
        $admin->cardNo      = $requ->cardNo;
        $admin->address     = $requ->address;
        $admin->pinNumber   = $hashPass;
        $admin->blGroup     = $requ->blGroup;
        $admin->dob         = $requ->dob;
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

    // card manager controller
    public function cardList(){
        $cardList = CardList::orderBy('id','DESC')->get();
        return view('admin.cardList',['cardList'=>$cardList]);
    }

    public function newCard(){
        return view('admin.cardCreation');
    }

    public function saveCard(Request $requ){
        $chk = CardList::where(['cardNo'=>$requ->cardNo])->first();
        if(!empty($chk)):
            return back()->with('error','Card already exist on our database');
        endif;

        $card = new CardList();

        $cardPin = rand(0,999999);

        $card->cardNo       = $requ->cardNo;
        $card->pinNumber    = $cardPin;
        $card->category     = $requ->category;
        if($card->save()):
            return back()->with('success','Card creation successfully');
        else:
            return back()->with('error','There was and error. Please try later');
        endif;
    }

    public function editCard($id){
        $cardData = CardList::find($id);
        return view('admin.editCard',['card'=>$cardData]);
    }

    public function updateCard(Request $requ){
        $card = CardList::find($requ->cardId);
        if(empty($card)):
            return back()->with('error','Data not found for update');
        endif;

        $card->cardNo       = $requ->cardNo;
        $card->pinNumber    = $requ->pinNumber;
        $card->category     = $requ->category;
        if($card->save()):
            return back()->with('success','Card details update successfully');
        else:
            return back()->with('error','There was and error. Please try later');
        endif;
    }

    public function activationCharge(){
        return view('admin.activationCharge');
    }

    public function saveCharge(Request $requ){
        $chk = CardCharge::where(['cardType'=>$requ->category,'charge'=>$requ->charge])->first();
        if(!empty($chk)):
            return back()->with('error','Charge already exist on our database');
        endif;

        $card = new CardCharge();

        $card->cardType     = $requ->category;
        $card->charge       = $requ->charge;
        $card->expiredTime  = $requ->expiredTime;
        if($card->save()):
            return back()->with('success','Charge setup successfully');
        else:
            return back()->with('error','There was and error. Please try later');
        endif;
    }
}
