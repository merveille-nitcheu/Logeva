<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model 
{

    protected $table = 'transactions';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'id_proprietaire', 'id_bien', 'id_motifTransaction', 'id_frequence', 'type_paiement', 'date_paiement', 'montant', 'statut', 'imputer_sur_quittance', 'date_debut', 'date_fin', 'commentaire');
    protected $visible = array('slug', 'id_proprietaire', 'id_bien', 'id_motifTransaction', 'id_frequence', 'type_paiement', 'date_paiement', 'montant', 'statut', 'imputer_sur_quittance', 'date_debut', 'date_fin', 'commentaire');

    public function proprietaire()
    {
        return $this->belongsTo('App\Proprietaire', 'id_proprietaire');
    }

    public function bien()
    {
        return $this->belongsTo('App\Bien', 'id_bien');
    }

    public function motifTransaction()
    {
        return $this->belongsTo('App\MotifTransaction', 'id_motifTransaction');
    }

    public function periodePaiement()
    {
        return $this->belongsTo('App\PeriodePaiement', 'id_frequence');
    }

}