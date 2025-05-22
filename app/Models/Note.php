<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'note',
        'commentaire',
        'user_id',
        'campagne_evaluation_id',
        'criteres_evaluation_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function campagneEvaluation()
    {
        return $this->belongsTo(CampagneEvaluation::class);
    }

    public function criteresEvaluation()
    {
        return $this->belongsTo(CriteresEvaluation::class);
    }
    public function getNoteAttribute($value)
    {
        return number_format($value, 2);
    }
}
