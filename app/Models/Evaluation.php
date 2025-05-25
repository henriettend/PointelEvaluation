<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'intitulé',
        'description',
        'date_debut',
        'date_fin',
        'campagne_evaluation_id',
        'type_evaluation_id',
        'statut',
        'competence_id',
        
        'competence_id',
        'user_id'
    ];

    public function typeEvaluation()
    {
        return $this->belongsTo(TypeEvaluation::class);
    }

    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }   
}
