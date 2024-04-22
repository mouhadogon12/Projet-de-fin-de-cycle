<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Etablissement;
use App\Models\Concours;
use App\Models\Inscription;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index (){
        $concours = Concours::all();
        $etablissements = Etablissement::all();

       if (Auth::id ()){
            $user_type=Auth()->user()->usertype;
            if($user_type == 'admin'){
                return view ('admin.index');
            }
            else if($user_type == 'user'){
                return view ('home.index', compact('concours','etablissements'));
            }


        }
        else {
            return redirect()->back();
        }
    }



    public function dashboard(){
        $totalCandidats = Inscription::count();
        return view('admin.dashboard.index', compact('totalCandidats'));
    }


    public function home(){
        return view ('admin.acceuil');
    }
    public function candidature(){
        $candidats = Inscription::all();
        return view('admin.candidature', compact('candidats'));
    }





}
