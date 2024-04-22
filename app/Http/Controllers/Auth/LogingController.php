<?php



namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticated(Request $request, $user_type)
    {
        $user_type=Auth()->user()->usertype;

         // Vérifie si l'utilisateur est un candidat
         if ($user_type == 'user') {
            return redirect()->route('candidater.id');
        }

        // Rediriger les autres utilisateurs vers leur propre dashboard
        return redirect('/home');
    }
}


