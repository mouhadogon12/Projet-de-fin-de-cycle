<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Inscription;
use App\Models\Concours;


class InscriptionController extends Controller
{
    public function store(Request $request,  $concoursId)
    {

         // Vérifier si l'utilisateur a déjà une inscription pour ce concours
    $existingInscription = Inscription::where('user_id', auth()->id())
    ->where('concours_id', $concoursId)
    ->first();

// Si une inscription existe déjà, afficher un message d'erreur
if ($existingInscription) {
return redirect()->back()->with('error', 'Vous avez déjà postulé à ce concours.');
}

// Si l'utilisateur n'a pas déjà une inscription pour ce concours, procéder à l'inscription

       // Valider les données soumises par le formulaire
       $validatedData = $request->validate([
        'seriebac' => 'required',
        'code_postal' => 'required|integer',
        'annebac' => 'required|integer',
        'ecole' => 'required|string',
        'num_cni' => 'required|integer',
        'releve_bac' => 'required|file',
        'date_Naissance' =>'required|date',
        'lieu_Naissance' =>'required|string',
        'nationalite' =>'required|string',





    ]);



    // Créer une nouvelle candidature avec les données validées
    $candidature = new Inscription();
    $candidature->seriebac = $validatedData['seriebac'];

    $candidature->annebac = $validatedData['annebac'];
    $candidature->ecole = $validatedData['ecole'];
    $candidature->num_cni = $validatedData['num_cni'];
    $candidature->nationalite = $validatedData['nationalite'];
    $candidature->lieu_Naissance = $validatedData['lieu_Naissance'];
    $candidature->date_Naissance = $validatedData['date_Naissance'];
    $candidature->code_postal = $validatedData['code_postal'];
    $candidature->status = "en traitement";







    // Enregistrer le fichier joint dans un répertoire approprié et enregistrer le chemin dans la base de données
    $documentPath = $request->file('releve_bac')->store('documents');
    $candidature->releve_bac = $documentPath;

    // Associer l'utilisateur actuel à la candidature
    $candidature->user_id = auth()->id();


    // Associer le concours auquel l'utilisateur postule à la candidature
    $candidature->concours_id = $concoursId;
        // Récupérer l'utilisateur actuellement authentifié
      // Récupérer le nom de l'utilisateur actuellement authentifié


        // Le reste du code pour la validation et l'enregistrement de la candidature...


    // Enregistrer la candidature dans la base de données
    $candidature->save();

    // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
    $nomUtilisateur = auth()->user()->name;
    $candidature = Inscription::latest()->first();

    $concours = Concours::all();
    $candidats = Inscription::all();

    return view('home.confirmation',compact('nomUtilisateur','concours','candidats','candidature'))->with('success', 'Votre candidature a été soumise avec succès ! Nous vous contacterons bientôt.');
}
public function etatCandidature()
{
    // Récupérer la candidature de l'utilisateur connecté
    $candidature = Inscription::where('user_id', auth()->id())->latest()->first();
    $candidats = Inscription::all();

    // Retourner la vue avec les détails de la candidature
    return view('home.candidature.etat', compact('candidature','candidats'));
}
public function dossiers()
{
    // Récupérer les dossiers de candidature du candidat actuellement authentifié
    $candidatures = auth()->user()->inscriptionsUser;

    // Passer les dossiers de candidature à une vue pour les afficher
    return view('home.dossierCandidat', compact('candidatures'));
}

public function approve($id)
{
   
 $candidat = Inscription::findOrFail($id);
 $candidat->status ='Approuvee';
 $candidat->save();


      return redirect()->back();

}



    }

