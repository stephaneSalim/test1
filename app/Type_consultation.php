<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_consultation extends Model
{
    protected $guarded = [];
    
    public function consultations(){
        return $this->hasMany(Consultation::class);
    }
}
