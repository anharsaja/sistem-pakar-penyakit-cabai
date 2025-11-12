<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $guarded = ['id'];

    protected $with = ['saranPenanganan'];

    public function saranPenanganan()
    {
        return $this->hasMany(SaranPenanganan::class);
    }

    public function symptom()
    {
        return $this->belongsToMany(Symptom::class, 'bobot_gejalas')
            ->withPivot('bobot')
            ->withTimestamps();
    }

    public function symptomPakar()
    {
        return $this->belongsToMany(Symptom::class, 'bobot_pakar')
            ->withPivot('mb', 'md')
            ->withTimestamps();
    }
}
