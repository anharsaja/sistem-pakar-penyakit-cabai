<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BobotPakar extends Model
{
    protected $guarded = ['id'];

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }

    public function symptom()
    {
        return $this->belongsTo(Symptom::class);
    }
}
