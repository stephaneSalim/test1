<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FicheDeSuivi extends Model
{

    protected $guarded = [];
    public function Consultation()
    {
        return $this->belongsTo('App\Consultation');
    }
}
