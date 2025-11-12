<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaranPenanganan extends Model
{
    protected $guarded = ['id'];

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
