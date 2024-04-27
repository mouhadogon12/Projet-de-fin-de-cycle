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
        'titre' => 'required|max:255|string',
        'description' => 'required|max:100000|string',
        'date_debutIns' => 'required|date',
        'date_limiteIns' => 'required|date',
        'etablissement_id' => 'required|exists:etablissements,id',
        'lien' => 'required|max:255|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
         // Validation pour un fichier image
            //'etablissement_id' => 'required|unique:concours,etablissement_id'

    ]);
     // Récupérer le fichier logo téléchargé
     $image = $request->file('image');

     // Générer un nom unique pour le fichier
     $imageName = time().'.'.$image->extension();

     // Stocker le fichier dans le dossier public/images
     $image->storeAs('public/images', $imageName);

    // Créer un nouveau concours avec les données validées
    $concours = new Concours();
    $concours->titre = $validatedData['titre'];
    $concours->description = $validatedData['description'];
    $concours->date_debutIns = $validatedData['date_debutIns'];
    $concours->date_limiteIns = $validatedData['date_limiteIns'];
    $concours->lien = $validatedData['lien'];
    $concours->etablissement_id = $validatedData['etablissement_id'];
    $concours->image = $imageName; // Enregistrer le nom du fichier dans la base de données



    //$concours->etablissement_id = $validatedData['etablissement_id'];
    // Enregistrer le concours
    $concours->save();

    // Rediriger l'utilisateur vers une autre page par exemple
    return redirect()->route('concours.index')->with('success', 'Le concours a été ajouté avec succès.');
}
            public function edit(int $id){
                $concours = Concours ::findOrFail($id);
                $etablissements = Etablissement::all();

               // return $concours;
               return view('admin.concours.edit',compact('concours','etablissements'));
            }
            public function update(Request $request,int $id){

                // Valider les données du formulaire
    $validatedData = $request->validate([
        'titre' => 'required|max:255|string',
        'description' => 'required|max:100000|string',
        'date_debutIns' => 'required|date',
        'date_limiteIns' => 'required|date',
        'lien' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation pour un fichier image


    ]);
     // Récupérer le fichier logo téléchargé
     $image = $request->file('image');

     // Générer un nom unique pour le fichier
     $imageName = time().'.'.$image->extension();

     // Stocker le fichier dans le dossier public/images
     $image->storeAs('public/images', $imageName);

    // Créer un nouveau concours avec les données validées

    // Récupérer le concours à modifier
    $concours = Concours::findOrFail($id);

    // Mettre à jour les attributs du concours avec les données validées
    $concours->titre = $validatedData['titre'];
    $concours->description = $validatedData['description'];
    $concours->date_debutIns = $validatedData['date_debutIns'];
    $concours->date_limiteIns = $validatedData['date_limiteIns'];
    $concours->lien = $validatedData['lien'];
    $concours->image = $imageName; // Enregistrer le nom du fichier dans la base de données



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
            public function detail(int $id){
                $concours = Concours::findOrFail($id);


            return view('admin.concours.show',compact('concours'));
            }

    }

