<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampagneEvaluation extends Model
{
    // Autorise l'assignation de masse pour ces colonnes
    protected $fillable = [
        'titre',
        'description',
        'dateDebut',
        'dateFin',
        'type',
        'statut',
        'type_evaluation_id',
        'competence_id',
        'user_id'
    ];

    // Relation avec le modèle TypeEvaluation (clé étrangère type_evaluation_id)
    public function typeEvaluation()
    {
        return $this->belongsTo(TypeEvaluation::class);
    }

    // Relation avec le modèle Competence (clé étrangère competence_id)
    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }

    // Relation avec le modèle User (clé étrangère user_id)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
