<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $guarded = ['id'];

    protected $with = ['saranPenanganan'];

    public function saranPenanganan()
    {
        return $this->hasMany(SaranPenanganan::class);
    }

    public function gejalas()
    {
        return $this->belongsToMany(Gejala::class, 'bobot_gejalas')
            ->withPivot('bobot')
            ->withTimestamps();
    }
}
