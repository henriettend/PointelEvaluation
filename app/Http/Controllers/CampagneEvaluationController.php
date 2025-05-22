<?php

namespace App\Http\Controllers;

use App\Models\CampagneEvaluation;
use Illuminate\Http\Request;

class CampagneEvaluationController extends Controller
{
    public function index()
    {
        $campagnes = CampagneEvaluation::all();
        return view('campagneEvaluation.index', compact('campagnes'));
    }

    public function create()
    {
        return view('campagneEvaluation.creation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'type' => 'required|string|max:50',
            'description' => 'required|string',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date|after_or_equal:dateDebut',
            'statut' => 'required|string'
        ]);

        CampagneEvaluation::create([
            'titre' => $request->titre,
            'type' => $request->type,
            'description' => $request->description,
            'dateDebut' => $request->dateDebut,
            'dateFin' => $request->dateFin,
            'statut' => $request->statut
        ]);

        return redirect()->route('campagneEvaluation.index')->with('success', 'Campagne créée avec succès.');
    }
}
