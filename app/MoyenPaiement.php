<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MoyenPaiement extends Model 
{

    protected $table = 'moyensPaiements';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'libelle');
    protected $visible = array('slug', 'libelle');

    public function location()
    {
        return $this->hasMany('App\Location', 'id_moyenPaiement');
    }

}