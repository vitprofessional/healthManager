<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminList;
use Hash;
use Session;

class FrontPanel extends Controller
{
    public function adminLogin(){
        return view('front.adminSignin');
    }

    public function confirmAdminLogin(Request $requ){
        $chk = AdminList::where(['userId'=>$requ->emailAddress])->first();
        if(!empty($chk)):
            $chkPass = Hash::check($requ->password,$chk->password);
            if($chkPass):
                // return $chk->adminType;
                $requ->session()->regenerate();
                if($chk->adminType == 'Admin'):
                    $requ->session()->put('superAdmin', $chk->id);
                endif;
                if($chk->adminType == 'Division Admin'):
                    $requ->session()->put('divisionAdmin', $chk->id);
                endif;
                if($chk->adminType == 'District Admin'):
                    $requ->session()->put('districtAdmin', $chk->id);
                endif;
                if($chk->adminType == 'Thana Admin'):
                    $requ->session()->put('thanaAdmin', $chk->id);
                endif;
                if($chk->adminType == 'Union Admin'):
                    $requ->session()->put('unionAdmin', $chk->id);
                endif;
                return redirect(route('adminHome'));
            else:
                return back()->with('error','Sorry! Wrong password provide');
            endif;
        else:
            return back()->with('error','Sorry! No admin rule found with your query');
        endif;
    }
}
