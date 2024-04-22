<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Inscription;

class InscriptionController extends Controller
{
    public function store(Request $request,  $concoursId)
    {
        // Valider les données soumises par le formulaire
        $validatedData = $request->validate([
            'seriebac' => 'required',
            'moybac' => 'required',
            'annebac' => 'required',
            'ecole' => 'required',
            'cni' => 'required',
            'document' => 'required|file',
        ]);

        // Créer une nouvelle candidature avec les données validées
        $candidature = new Inscription();
        $candidature->seriebac = $validatedData['seriebac'];
        $candidature->moybac = $validatedData['moybac'];
        $candidature->annebac = $validatedData['annebac'];
        $candidature->ecole = $validatedData['ecole'];
        $candidature->cni = $validatedData['cni'];

        // Enregistrer le fichier joint dans un répertoire approprié et enregistrer le chemin dans la base de données
        $documentPath = $request->file('document')->store('documents');
        $candidature->document = $documentPath;
        // Associer l'utilisateur actuel à la candidature
    $candidature->user_id = Auth::id();

    // Associer le concours auquel l'utilisateur postule à la candidature
    $candidature->concours_id = $concoursId;

        // Enregistrer la candidature dans la base de données
        $candidature->save();

        // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
        return view('home.confirmation')->with('success', 'Votre candidature a été soumise avec succès ! Nous vous contacterons bientôt.');
    }
}
