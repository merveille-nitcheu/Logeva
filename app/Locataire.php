<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Locataire extends Model 
{

    protected $table = 'locataires';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'nom', 'email', 'login', 'password', 'telephone', 'etat');
    protected $visible = array('slug', 'login', 'password', 'telephone', 'etat');

    public function locataireBien()
    {
        return $this->hasMany('App\LocataireBien', 'id_locataire');
    }

    public function messageRecu()
    {
        return $this->hasMany('App\Message', 'id_recepteur')->where('recepteur_cible','locataire');
    }

    public function messageEnvoyer()
    {
        return $this->hasMany('App\Message', 'id_expediteur')->where('expediteur_cible','locataire');
    }

}