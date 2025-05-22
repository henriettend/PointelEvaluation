<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CriteresEvaluation extends Model
{
    protected $fillable = [
        'intitulé',
        'description',
        'type_evaluation_id',
        'competence_id'
    ];

    public function typeEvaluation()
    {
        return $this->belongsTo(TypeEvaluation::class);
    }

    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }
    public function campagnesEvaluation()
    {
        return $this->hasMany(CampagneEvaluation::class);
    }
}
