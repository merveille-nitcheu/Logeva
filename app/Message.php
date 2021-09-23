<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model 
{

    protected $table = 'messages';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'contenu', 'libelle', 'id_recepteur', 'id_expediteur', 'recepteur_cible', 'expediteur_cible');
    protected $visible = array('slug', 'contenu', 'libelle', 'id_recepteur', 'id_expediteur', 'recepteur_cible', 'expediteur_cible');

    public function locataireRecu()
    {
        return $this->belongsTo('App\Locataire', 'id_recepteur')->where('recepteur_cible','locataire');
    }

    public function locataireEnvoyer()
    {
        return $this->belongsTo('App\Locataire', 'id_expediteur')->where('expediteur_cible','locataire');
    }

    public function proprietaireRecu()
    {
        return $this->belongsTo('App\Proprietaire', 'id_recepteur')->where('recepteur_cible','proprietaire');
    }

    public function proprietaireEnvoyer()
    {
        return $this->belongsTo('App\Proprietaire', 'id_expediteur')->where('expediteur_cible','proprietaire');
    }

    public function utilisateurRecu()
    {
        return $this->belongsTo('App\Utilisateur', 'id_recepteur')->where('recepteur_cible','utilisateur');
    }

    public function utilisateurEnvoyer()
    {
        return $this->belongsTo('App\Utilisateur', 'id_expediteur')->where('expediteur_cible','utilisateur');
    }

}