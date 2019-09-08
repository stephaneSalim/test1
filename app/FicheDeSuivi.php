<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FicheDeSuivi extends Model
{
    public function Consultation()
    {
        return $this->belongsTo('App\Consultation');
    }
}
