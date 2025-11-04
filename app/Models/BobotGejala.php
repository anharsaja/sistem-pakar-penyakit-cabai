<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BobotGejala extends Model
{
    protected $guarded = ['id'];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }

    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }
}
