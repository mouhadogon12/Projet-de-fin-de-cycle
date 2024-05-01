<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Etablissement;
use App\Models\Concours;
use App\Models\Inscription;
use App\Mail\CandidatureApprouvee;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;


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
                return view ( 'home.index', compact('concours','etablissements'));
            }


        }
        else {
            return redirect()->back();
        }
    }



    public function dashboard(){
        $totalCandidats = Inscription::count();
        $totalConcours = Concours::count();
        return view('admin.dashboard.index', compact('totalCandidats','totalConcours'));
    }


    public function home(){
        return view ('admin.acceuil');
    }
    public function candidature(){
        $candidats = Inscription::all();
        return view('admin.candidature', compact('candidats'));
    }
    public function viewReleve(int $id)
{
    $candidat = Inscription::findOrFail($id);
    return view('admin.view_releve',compact('candidat'));
}
public function approve($id)
{
    // Logique pour approuver la candidature avec l'ID donné

    // Envoyer un e-mail au candidat
   //$candidature = Inscription::findOrFail($id);
   //$candidat = $candidature->user;
//    try {
//     Mail::to($candidat->user->email)->send(new CandidatureApprouvee($candidat));
//     // Succès : E-mail envoyé
// } catch (\Exception $e) {
//     // Gestion des erreurs : échec de l'envoi de l'e-mail
//     // Log $e->getMessage() ou renvoyer un message d'erreur à l'administrateur
// }

// Autres actions après l'approbation de la candidature

    // Autres opérations si nécessaire

   // return redirect()->back()->with('success', 'Candidature approuvée avec succès. Un e-mail a été envoyé au candidat.');

   //$user = auth()->user(); // Obtenez l'utilisateur connecté ou tout autre utilisateur de votre système

   // Envoyer l'e-mail
 //  Mail::to($user->email)->send(new NotificationMail($user));
 // Approbation du candidat
 $candidat = Inscription::findOrFail($id);
 $candidat->status ='Approuvee';
 $candidat->save();

 // Envoi de l'e-mail au candidat


 // Redirection ou autre logique

  // return "E-mail envoyé avec succès";
      return redirect()->back();

}






}
