<?php

namespace App\Http\Controllers;
use App\Models\Etablissement;
use App\Models\Concours;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $concours = Concours::all();
        $etablissements = Etablissement::all();
        return view('home.index', compact('concours','etablissements'));
    }

    public function liste(){
        $concours = Concours::all();
        $etablissements = Etablissement::all();
        return view('home.liste', compact('concours','etablissements'));
    }
    public function voirconcours(Concours $concours){
        $concours = Concours::all();
        $etablissements = Etablissement::all();
        return view('home.voirconcours', compact('concours','etablissements'));
    }

}


