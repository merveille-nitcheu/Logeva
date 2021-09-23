<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocataireBien extends Model 
{

    protected $table = 'locatairesBiens';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'id_locataire', 'id_location', 'etat_contrat');
    protected $visible = array('slug', 'id_locataire', 'id_location', 'etat_contrat');

    public function locataire()
    {
        return $this->belongsTo('App\Locataire', 'id_locataire');
    }

    public function location()
    {
        return $this->belongsTo('App\Location', 'id_location');
    }

}