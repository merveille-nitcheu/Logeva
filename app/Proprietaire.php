<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proprietaire extends Model 
{

    protected $table = 'proprietaires';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'nom', 'email', 'login', 'password', 'telephone', 'etat');
    protected $visible = array('slug', 'nom', 'email', 'login', 'password', 'telephone', 'etat');

    protected $attributes = ['etat'=>'actif'];

    public function bien()
    {
        return $this->hasMany('App\Bien', 'id_proprietaire');
    }

    public function messageRecu()
    {
        return $this->hasMany('App\Message', 'id_recepteur')->where('recepteur_cible','proprietaire');
    }

    public function messageEnvoyer()
    {
        return $this->hasMany('App\Message', 'id_expediteur')->where('expediteur_cible','proprietaire');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction', 'id_proprietaire');
    }

    public function abonnement()
    {
        return $this->hasMany('App\Abonnement', 'id_proprietaire');
    }

}