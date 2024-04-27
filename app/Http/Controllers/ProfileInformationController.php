<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function show(){
        $candidat = Auth::user(); // Supposons que les informations du candidat sont stockées dans la table des utilisateurs

        return view ('profile.show',compact('candidat'));
    }
}
