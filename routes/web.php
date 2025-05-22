<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampagneEvaluationController;

// Liste des campagnes : page d'accueil et plusieurs routes GET possibles
Route::get('/', [CampagneEvaluationController::class, 'index'])->name('campagneEvaluation.index');
Route::get('/campagnes', [CampagneEvaluationController::class, 'index']);
Route::get('/campagnes/index', [CampagneEvaluationController::class, 'index']);  // Ajout pour régler l'erreur

// Affichage du formulaire de création
Route::get('/campagnes/creation', [CampagneEvaluationController::class, 'create'])->name('campagneEvaluation.creation');

// Enregistrement d'une nouvelle campagne
Route::post('/campagnes', [CampagneEvaluationController::class, 'store'])->name('campagneEvaluation.store');

// Affichage du formulaire de modification
Route::get('/campagnes/modification/{id}', [CampagneEvaluationController::class, 'modification'])->name('campagneEvaluation.modification');

// Mise à jour d'une campagne
Route::put('/campagnes/{id}', [CampagneEvaluationController::class, 'update'])->name('campagneEvaluation.update');

// Suppression d'une campagne
Route::delete('/campagnes/{id}', [CampagneEvaluationController::class, 'suppression'])->name('campagneEvaluation.suppression');
