<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index (){
        if (Auth::id ()){
            $user_type=Auth()->user()->usertype;
            if($user_type == 'admin'){
                return view ('admin.index');
            }
            else if($user_type == 'user'){
                return view ('home.index');
            }


        }
        else {
            return redirect()->back();
        }
    }


    public function dashboard(){
        return view('admin.dashboard.index');
    }


    public function home(){
        return view ('admin.acceuil');
    }





}
