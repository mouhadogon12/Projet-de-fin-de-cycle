<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concours;
use App\Models\Etablissement;




class ConcoursController extends Controller
{

    public function create(){
        $etablissements = Etablissement::all();

        return view ('admin.concours.create',compact('etablissements'));

    }
    public function index(){
        $concours = Concours::all();
        $etablissements = Etablissement::all();

        return view('admin.concours.index', compact('concours','etablissements'));


    }
    public function store(Request $request){
        // Valider les données du formulaire
    $validatedData = $request->validate([
        'nom' => 'required|max:255|string',
        'description' => 'required|max:100000|string',
        'date_debut' => 'required|date',
        'date_fin' => 'required|date',
        'etablissement_id' => 'required|exists:etablissements,id',



        //'etablissement_id' => 'required|unique:concours,etablissement_id'

    ]);

    // Créer un nouveau concours avec les données validées
    $concours = new Concours();
    $concours->nom = $validatedData['nom'];
    $concours->description = $validatedData['description'];
    $concours->date_debut = $validatedData['date_debut'];
    $concours->date_fin = $validatedData['date_fin'];
    $concours->etablissement_id = $validatedData['etablissement_id'];

    //$concours->etablissement_id = $validatedData['etablissement_id'];
    // Enregistrer le concours
    $concours->save();

    // Rediriger l'utilisateur vers une autre page par exemple
    return redirect()->route('concours.index')->with('success', 'Le concours a été ajouté avec succès.');
}
            public function edit(int $id){
                $concours = Concours ::findOrFail($id);
               // return $concours;
               return view('admin.concours.edit',compact('concours'));
            }
            public function update(Request $request,int $id){

                // Valider les données du formulaire
    $validatedData = $request->validate([
        'nom' => 'required|max:255|string',
        'description' => 'required|max:100000|string',
        'date_debut' => 'required|date',
        'date_fin' => 'required|date',
    ]);

    // Récupérer le concours à modifier
    $concours = Concours::findOrFail($id);

    // Mettre à jour les attributs du concours avec les données validées
    $concours->nom = $validatedData['nom'];
    $concours->description = $validatedData['description'];
    $concours->date_debut = $validatedData['date_debut'];
    $concours->date_fin = $validatedData['date_fin'];

    // Enregistrer les modifications
    $concours->save();

    // Rediriger l'utilisateur avec un message de succès
    return redirect()->route('concours.index')->with('success', 'Le concours a été modifié avec succès.');
            }
            public function destroy(int $id){
                $concours = Concours::findOrFail($id);

                $concours->delete();
                return redirect()->route('concours.index')->with('success', 'Le concours a été supprime.');


            }

    }

