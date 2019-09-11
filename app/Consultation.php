<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{

    public function ficheDeSuivi()
    {
        return $this->hasOne('App\FicheDeSuivi');
    }

    /**
     * Relation 1,1 entre consultation et patient
     */
    public function patient(){

       return $this->belongsTo(Patient::class);
    }
}
