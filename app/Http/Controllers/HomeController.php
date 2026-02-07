<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//@aab Code (redirect Admin und normaler User jede in seinen Page)
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    //@aab Code (redirect Admin und normaler User jede in seinen Page)
    public function redirect(){
        $user_type=Auth::user()->user_type;
        if ($user_type == '1') {
            return view('admin.home');
        } else {
            return view('dashboard');
        }
        
       
    }
}
