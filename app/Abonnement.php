<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abonnement extends Model 
{

    protected $table = 'abonnements';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'id_proprietaire', 'id_typeAbonnement');
    protected $visible = array('slug', 'id_proprietaire', 'id_typeAbonnement');

    public function typeAbonnement()
    {
        return $this->belongsTo('App\TypeAbonnement', 'id_typeAbonnement');
    }

    public function proprietaire()
    {
        return $this->belongsTo('App\Proprietaire', 'id_proprietaire');
    }

}