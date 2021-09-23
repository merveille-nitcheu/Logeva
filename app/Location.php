<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model 
{

    protected $table = 'locations';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'id_bien', 'id_periodePaiement', 'id_moyenPaiement', 'duree', 'date_debut', 'loyer_initial', 'charge', 'type_charge', 'jour_paiement', 'clause_revision_loyer', 'indice_reference', 'description_bail', 'clause_particuliere', 'garant_solidaire', 'valider_automatiquement_paiement', 'envoyer_automatiquement_cheance', 'envoyer_automatiquement_quittance', 'rappeler_automatiquement_revision_loyer');
    protected $visible = array('slug', 'id_bien', 'id_periodePaiement', 'id_moyenPaiement', 'duree', 'date_debut', 'loyer_initial', 'charge', 'type_charge', 'jour_paiement', 'clause_revision_loyer', 'indice_reference', 'description_bail', 'clause_particuliere', 'garant_solidaire', 'valider_automatiquement_paiement', 'envoyer_automatiquement_cheance', 'envoyer_automatiquement_quittance', 'rappeler_automatiquement_revision_loyer');

    public function bien()
    {
        return $this->belongsTo('App\Bien', 'id_location');
    }

    public function periodePaiement()
    {
        return $this->belongsTo('App\PeriodePaiement', 'id_periodePaiement');
    }

    public function moyenPaiement()
    {
        return $this->belongsTo('App\MoyenPaiement', 'id_moyenPaiement');
    }

    public function paiement()
    {
        return $this->hasMany('App\Paiement', 'id_location');
    }

    public function locataireBien()
    {
        return $this->hasMany('App\LocataireBien', 'id_location');
    }

}