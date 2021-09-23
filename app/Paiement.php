<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paiement extends Model 
{

    protected $table = 'paiements';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'id_location', 'date', 'etat_paiement', 'local_code_paiement', 'online_code_paiement', 'statut');
    protected $visible = array('slug', 'id_location', 'date', 'etat_paiement', 'local_code_paiement', 'online_code_paiement', 'statut');

    public function location()
    {
        return $this->belongsTo('App\Location', 'id_location');
    }

}