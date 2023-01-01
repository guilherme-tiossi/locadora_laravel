<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin.login_adm");
    }

    public function dashboard(){
        return view("admin.adm");
    }

    public function login(Request $request){
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 
                                          'password' => $check['password'], 
                                          'adm' => $check['adm'] ])){
            return redirect('admin/adm');
        }
        elseif (Auth::guard('web')) {
            return redirect()->route('login');
        }{
            
        }
    }
}
