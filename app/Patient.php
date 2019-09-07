<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //Table name
    protected $table = 'patients';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function consultation(){
        return $this->hasMany('App\Consultation');
    }
}
