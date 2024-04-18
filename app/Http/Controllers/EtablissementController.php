<?php

namespace App\Http\Controllers;
use App\Models\Etablissement;

use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    public function index()
    {
        $etablissements = Etablissement::all();
        return view('admin.etablissement.index', compact('etablissements'));
    }
    public function create()
    {

        return view('admin.etablissement.create');
    }
    public function store(Request $request){
        // Valider les données du formulaire
    $validatedData = $request->validate([
        'nom' => 'required|max:255|string',
        'adresse' => 'required|max:255|string',
        'contact' => 'required|max:255|string',

        //'etablissement_id' => 'required|unique:concours,etablissement_id'

    ]);

    // Créer un nouveau concours avec les données validées
    $etablissements = new Etablissement();
    $etablissements->nom = $validatedData['nom'];
    $etablissements->contact = $validatedData['contact'];
    $etablissements->adresse = $validatedData['adresse'];

    //$concours->etablissement_id = $validatedData['etablissement_id'];
    // Enregistrer le concours
    $etablissements->save();

    // Rediriger l'utilisateur vers une autre page par exemple
    return redirect()->route('etablissement.index')->with('success', 'l\'Etablissement a été ajouté avec succès.');
}

    public function destroy(int $id){

        try {
            $etablissement = Etablissement::findOrFail($id);

            // Supprimer tous les concours associés à l'établissement
            $etablissement->concours()->delete();

            // Supprimer l'établissement lui-même
            $etablissement->delete();

            return redirect()->route('etablissement.index')->with('success', 'L\'établissement et ses concours ont été supprimés.');
        } catch (\Exception $e) {
            return redirect()->route('etablissement.index')->with('error', 'Une erreur s\'est produite lors de la suppression de l\'établissement et de ses concours.');
        }


    }
   

}
