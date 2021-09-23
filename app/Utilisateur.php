<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Utilisateur extends Model 
{

    protected $table = 'utilisateurs';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'nom', 'email', 'login', 'telephone', 'etat');
    protected $visible = array('slug', 'nom', 'email', 'login', 'password', 'telephone', 'etat');

    public function messageRecu()
    {
        return $this->hasMany('App\Message', 'id_recepteur')->where('recepteur_cible','utilisateur');
    }

    public function messageEnvoyer()
    {
        return $this->hasMany('App\Message', 'id_expediteur')->where('expediteur_cible','utilisateur');
    }

}