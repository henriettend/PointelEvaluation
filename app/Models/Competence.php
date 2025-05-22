<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = [
        'intitulé',
        'type',
        'description'
    ];

    public function campagnesEvaluation()
    {
        return $this->hasMany(CampagneEvaluation::class);
    }
}
