<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationSymptom extends Model
{
    protected $guarded = ['id'];

    public function symptom()
    {
        return $this->belongsTo(Symptom::class);
    }
}
