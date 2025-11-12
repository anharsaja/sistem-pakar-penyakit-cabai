<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $guarded = ['id'];

    public function disease()
    {
        return $this->belongsToMany(Disease::class, 'bobot_gejalas')
            ->withPivot('bobot')
            ->withTimestamps();
    }

    public function diseasePakar()
    {
        return $this->belongsToMany(Disease::class, 'bobot_pakar')
            ->withPivot('mb', 'md')
            ->withTimestamps();
    }
}
