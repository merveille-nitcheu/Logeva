<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeBien extends Model 
{

    protected $table = 'typeBiens';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('slug', 'libelle');
    protected $visible = array('slug', 'libelle');

    public function bien()
    {
        return $this->hasMany('App\Bien', 'id_typeBien');
    }

}