<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Catagory;

class AdminController extends Controller
{

    /* ---------------- Catagorys ---------------- */
    public function view_catagory(){
        return view('main.admin.pages_admin.catagory');
    }

    public function add_catagory(Request $request){
        //$data ist Objekt vom Catagory Model Class
        $data=new Catagory;

        # catagory_name ist Column von Catagory Tabele in Datenbank
        # $request ist Array, die vom Form von admin.dashboard.php kommt
        # catagory_input ist die Value, die vom input Feld von admin.dashboard.php kommt
        $data->catagory_name = $request->catagory_input;

        $data->save();

    return redirect()->back()->with('message', 'Catagory Added Successfully');    
    }


    /* ---------------- Products ---------------- */
    public function show_product(){
        return view('main.admin.pages_admin.product');
    }

    public function add_product(Request $request){
        //$data ist Objekt vom Catagory Model Class
        $data=new Catagory;

        # catagory_name ist Column von Catagory Tabele in Datenbank
        # $request ist Array, die vom Form von admin.dashboard.php kommt
        # catagory_input ist die Value, die vom input Feld von admin.dashboard.php kommt
        $data->catagory_name = $request->catagory_input;

        $data->save();

    return redirect()->back()->with('message', 'Product Added Successfully');    
    }

}
