<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $guarded = ['id'];

    public function penyakits()
    {
        return $this->belongsToMany(Penyakit::class, 'basis_pengetahuans')
            ->withPivot('bobot')
            ->withTimestamps();
    }
}
