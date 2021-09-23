<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeAbonnement extends Model 
{

    protected $table = 'typeAbonnements';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'libelle', 'prix');
    protected $visible = array('slug', 'libelle', 'prix');

    public function abonnement()
    {
        return $this->hasMany('App\Abonnement', 'id_typeAbonnement');
    }

}