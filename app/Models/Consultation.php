<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'consulted_at' => 'datetime',
    ];

    public function symptoms()
    {
        return $this->hasMany(ConsultationSymptom::class);
    }

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
