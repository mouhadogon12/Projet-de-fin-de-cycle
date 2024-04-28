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
        $latestConcours = Concours::latest()->take(3)->get();
        $otherConcours = Concours::latest()->skip(3)->get();

        $etablissements = Etablissement::all();
        return view('home.liste', compact('latestConcours','otherConcours','etablissements'));
    }
    public function voirconcours($id){
        $concours = Concours ::findOrFail($id);

        return view('home.voirconcours', compact('concours'));
    }
    public function postuler(int $id){
        $concours = Concours ::findOrFail($id);
        return view('home.postuler', compact('concours'));

    }
    public function autreConcours(){
        $concours = Concours::all();
        $etablissements = Etablissement::all();

        return view ('home.autreConcours',compact('concours','etablissements'));
    }

}


