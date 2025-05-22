<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeEvaluation extends Model
{
    protected $fillable = [
        'intitulé',
        'description'
    ];

    public function campagnesEvaluation()
    {
        return $this->hasMany(CampagneEvaluation::class);
    }

    public function criteresEvaluation()
    {
        return $this->hasMany(CriteresEvaluation::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
