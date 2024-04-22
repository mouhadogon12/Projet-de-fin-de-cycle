<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConcoursController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscriptionController;

use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Inscription;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index' ])->name('home.page');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home',[AdminController::class,'index'])->name('auth.home');









// Routes accessibles à tous les types d'utilisateurs
Route::get('/concours_page',[AdminController::class,'concours_page']);
Route::get('/dashboardEtablissement',[AdminController::class,'dashboard'])->name('dashboardEta');
// Route de déconnexion


// Route du profil de l'utilisateur
Route::get('/profile', [ProfileInformationController::class, 'show'])
->name('profile.show');
Route::get('/concours/gestion', [ConcoursController::class, 'index'])->name('concours.index');

Route::get('/concours',[ConcoursController::class, 'ajouter'])->name('concours.ajouter');
Route::get('/concours/create',[ConcoursController::class, 'create'])->name('concours.create');
Route::post('/concours/create',[ConcoursController::class, 'store'])->name('concours.store');
Route::get('/concours/{id}/edit',[ConcoursController::class, 'edit'])->name('concours.edit');
Route::put('/concours/{id}',[ConcoursController::class, 'update'])->name('concours.update');
Route::delete('/concours/{id}/delete',[ConcoursController::class, 'destroy'])->name('concours.destroy');
Route::get('/home/user',[AdminController::class,'home'])->name('admin.acceuil');
Route::get('/etablissement',[EtablissementController::class,'index'])->name('etablissement.index');
Route::get('/etablissement/create',[EtablissementController::class,'create'])->name('etablissement.create');
Route::post('/etablissement/store',[EtablissementController::class,'store'])->name('etablissement.store');
Route::delete('/etablissement/{id}/delete',[EtablissementController::class, 'destroy'])->name('etablissement.destroy');
Route::get('/liste',[HomeController::class, 'liste' ])->name('liste.concours');
Route::get('/concours/{id}',[HomeController::class, 'voirconcours'])->name('concours.voir');
Route::get('/concours/postuler/{id}',[HomeController::class, 'postuler'])->name('concours.id');
Route::middleware('auth')->group(function () {
   // Route::get('/concours/candidater/{id}',[HomeController::class, 'postuler'])->name('candidater.id');

});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/concours/candidater/{id}',[HomeController::class, 'postuler'])->name('candidater.id');
    Route::get('/authenticated', [LoginController::class, 'authenticated']);
    Route::get('/confirmation',[InscriptionController::class, 'confirmation'])->name('confirmation');

    Route::post('/candidater/{concoursId}',[InscriptionController::class, 'store'])->name('candidatures.store');
});

Route::get('/candidature/gestion',[AdminController::class, 'candidature'])->name('candidats');










