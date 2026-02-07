<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//@aab Code (call Model and Auth Class)
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    //@aab Code (create new function redirect)
    public function redirect(){
        $user_type=Auth::user()->user_type;
        if ($user_type == '1') {
            return view('admin.home');
        } else {
            return view('dashboard');
        }
        
       
    }
}
