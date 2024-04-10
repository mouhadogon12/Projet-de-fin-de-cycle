<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConcoursController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;


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

Route::get('/',[HomeController::class, 'index' ]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/home',[AdminController::class,'index']);
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
Route::get('/home',[AdminController::class,'home'])->name('admin.acceuil');




