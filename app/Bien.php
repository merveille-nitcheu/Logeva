<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\slugTrait;

class Bien extends Model 
{

    protected $table = 'biens';
    public $timestamps = true;

    use SoftDeletes;
    use slugTrait;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'id_typeBien', 'id_proprietaire', 'nom', 'nombre_piece', 'surface', 'adresse', 'ville', 'pays', 'code_postal', 'description', 'centre_imposition', 'nombre_lot', 'nombre_batiment', 'nombre_etage', 'nombre_escalier', 'numero_porte', 'zone_stationnement', 'garage', 'cave', 'autres_dependance', 'gardiennage', 'interphone', 'ascenseur', 'vide_ordure', 'espaces_vert', 'chauffage_collectif', 'eau_chaude_collective', 'antenne_tv_collective', 'autre_elements_collectif');

    protected $visible = array('slug', 'id_typeBien', 'id_proprietaire', 'nom', 'nombre_piece', 'surface', 'adresse', 'ville', 'pays', 'code_postal', 'description', 'centre_imposition', 'nombre_lot', 'nombre_batiment', 'nombre_etage', 'nombre_escalier', 'numero_porte', 'zone_stationnement', 'garage', 'cave', 'autres_dependance', 'gardiennage', 'interphone', 'ascenseur', 'vide_ordure', 'espaces_vert', 'chauffage_collectif', 'eau_chaude_collective', 'antenne_tv_collective', 'autre_elements_collectif');

    public function typeBien()
    {
        return $this->belongsTo('App\TypeBien', 'id_typeBien');
    }

    public function proprietaire()
    {
        return $this->belongsTo('App\Proprietaire', 'id_proprietaire');
    }

    public function location()
    {
        return $this->hasMany('App\Location', 'id_bien');
    }

    public function galerie()
    {
        return $this->hasMany('App\Galerie', 'id_bien');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction', 'id_bien');
    }

    static public function findSlug($slug){
        return static::where('slug','=',$slug)->get()[0];
    }

}