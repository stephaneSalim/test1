<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Consultation;

class Patient extends Model
{
    //Table name
    protected $table = 'patients';

    public $primaryKey = 'id';

    public $timestamp = true;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Relation entre 1,1 entre patient et
     * medecin traitant
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Relation 1,n entre patient et consultation
     */
    public function consultations(){
        return $this->hasMany(Consultation::class);
    }
}
