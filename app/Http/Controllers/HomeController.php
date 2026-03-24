<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//@aab Code (redirect Admin und normaler User jede in seinen Page)
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    //@aab Code (redirect Admin und normaler User jede in seinen Page)
    public function redirect(){
       
        $user_type = Auth::user()->user_type;
        
        if ($user_type == '1') { 
            return view('admin.dashboard');
        } else { 
            return view('frontend.home');
        }
       
    }

    public function index() {
            $products = Product::paginate(3);
            return view('frontend.home', compact('products'));
    }
}
