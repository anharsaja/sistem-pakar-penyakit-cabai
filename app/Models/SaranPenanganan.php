<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaranPenanganan extends Model
{
    protected $guarded = ['id'];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
